import gsap from 'gsap'

export class PageLoader {
  static load(cb?: () => void): void {
    const items = document.querySelectorAll('[data-i]')

    const tl = gsap.timeline({
      onComplete: () => {
        document.body.classList.remove('loading')
        cb && cb()
      }
    })

    items.length &&
      tl.to(items, {
        duration: 0.7,
        y: 0,
        opacity: 1,
        ease: 'power2.out',
        stagger: 0.2
      })
  }
}
