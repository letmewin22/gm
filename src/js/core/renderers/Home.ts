import Highway from '@dogstudio/highway'
import ScrollBooster from 'scrollbooster'
import {resize} from '@emotionagency/utils'

import {PageLoader} from '@/components/loaders/PageLoader'
import {onLoaded} from '@/utils/onLoaded'

class Home extends Highway.Renderer {
  dragable: () => void
  sc: typeof ScrollBooster.prototype

  onEnterCompleted(): void {
    onLoaded(() => {
      PageLoader.load()

      const scrollthumb: HTMLElement = document.querySelector('.clients__thumb')
      const draggableItems: HTMLElement = document.querySelector(
        '.clients__items'
      )
      const draggableWrapper: HTMLElement = document.querySelector(
        '.clients__items-wrapper'
      )

      this.dragable = () => {
        if (draggableItems.scrollWidth !== draggableItems.offsetWidth) {
          scrollthumb.style.display = 'block'
          draggableWrapper.classList.add('active')

          this.sc = new ScrollBooster({
            viewport: draggableWrapper,
            content: draggableItems,
            scrollMode: 'transform', // use CSS 'transform' property
            direction: 'horizontal', // allow only horizontal scrolling
            emulateScroll: true, // scroll on wheel events
            onUpdate: e => {
              const x = e.position.x
              const item = document.querySelector('.clients__items')
              let percent = (100 * x) / (item.scrollWidth - item.clientWidth)
              if (percent >= 100) percent = 100
              else if (percent <= 0) percent = 0
              scrollthumb.style.left = percent + '%'
              scrollthumb.style.transform = `translateX(-${percent}%)`
            }
          })
        }
      }

      this.dragable = this.dragable.bind(this)

      resize.on(this.dragable)
    })
  }
  onLeave(): void {
    resize.off(this.dragable)
    this.sc.destroy()
  }
}
// Don`t forget to export your renderer
export default Home
