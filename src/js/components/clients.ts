import ScrollBooster from 'scrollbooster'
import {resize} from '@emotionagency/utils'

export interface IClients {
  destroy: () => void
}

export const clients = (): IClients => {
  const scrollthumb: HTMLElement = document.querySelector('.clients__thumb')
  const scrollbar: HTMLElement = document.querySelector('.clients__scrollbar')
  const draggableItems: HTMLElement = document.querySelector('.clients__items')
  const draggableWrapper: HTMLElement = document.querySelector(
    '.clients__items-wrapper'
  )

  let sc: ScrollBooster.prototype

  const dragable = () => {
    if (draggableItems.scrollWidth !== draggableItems.offsetWidth) {
      scrollbar.style.display = 'block'
      draggableWrapper.classList.add('active')

      sc = new ScrollBooster({
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

  resize.on(dragable)

  return {
    destroy() {
      resize.off(dragable)
      sc && sc.destroy()
    }
  }
}
