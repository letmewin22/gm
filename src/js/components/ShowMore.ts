import gsap from 'gsap'

export class ShowMore {
  btn: HTMLElement = document.querySelector('[data-show-more]')
  items = [...document.querySelectorAll('[data-show-items]')] as HTMLElement[]
  isShow = false

  constructor() {
    this.bounds()
    this.init()
  }

  private init(): void {
    this.btn.addEventListener('click', this.toggle)
  }

  bounds(): void {
    const methods = ['show', 'hide', 'toggle']
    methods.forEach(fn => (this[fn] = this[fn].bind(this)))
  }

  toggle(): void {
    this.isShow ? this.hide() : this.show()
  }

  show(): void {
    this.items.forEach(item => {
      item.classList.add('visible')
    })
    gsap.to(this.items, {duration: 0.5, opacity: 1})
    this.btn.innerText = this.btn.dataset.hideText
    this.isShow = true
  }

  hide(): void {
    gsap.to(this.items, {
      duration: 0.5,
      opacity: 0,
      onComplete: () => {
        this.items.forEach(item => {
          item.classList.remove('visible')
        })

        for (let i = 0; i < 3; i++) {
          gsap.to(this.items[i], {duration: 0.5, opacity: 1})
          this.items[i].classList.add('visible')
        }
        this.btn.innerText = this.btn.dataset.showText

        this.isShow = false
      }
    })
  }
}
