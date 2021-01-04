import gsap from 'gsap'

import Slider from './Slider'
import Navigation from './Navigation'

type TOpts = {
  time: number
  ease: string
}

export default class Slideshow extends Slider {
  opts: TOpts
  nav: typeof Navigation.prototype
  isAnimating = false

  constructor($el: HTMLElement, counter = 0) {
    super($el, counter)

    this.opts = {
      time: 0.25,
      ease: 'power2.out'
    }

    this.$slides[this.counter].classList.add('active')
  }

  init(): void {
    super.init()
    this.nav = new Navigation(this.$el, {
      prev: this.prev,
      next: this.next
    })
  }

  prev(): void {
    if (!this.isAnimating) {
      super.prev()
      this.slideAnimation()
    }
  }

  next(): void {
    if (!this.isAnimating) {
      super.next()
      this.slideAnimation()
    }
  }

  slideAnimation(): void {
    this.isAnimating = true
    const tl = gsap.timeline({
      onComplete: () => {
        this.isAnimating = false
      }
    })

    tl.fromTo(
      this.$slides[this.previous],
      {opacity: '1', duration: this.opts.time},
      {
        opacity: '0',
        ease: this.opts.ease,
        onComplete: () => {
          this.$slides[this.previous].classList.remove('active')
          this.$slides[this.counter].classList.add('active')
        }
      }
    ).fromTo(
      this.$slides[this.counter],
      {opacity: '0', duration: this.opts.time},
      {opacity: '1', ease: this.opts.ease}
    )
  }
  destroy(): void {
    super.destroy()
    this.nav.destroy()
  }
}
