import Highway from '@dogstudio/highway'
import gsap from 'gsap'

type T = {
  from?: HTMLElement
  done?: () => void
  to?: HTMLElement
  trigger?: HTMLElement
}

class Basic extends Highway.Transition {
  in({to, from, done}: T): void {
    gsap.set(to, {opacity: 0})
    window.scrollTo(0, 0)
    // Remove Old View
    from.remove()
    gsap.to(to, {duration: 0.25, opacity: 1, onComplete: done})
  }

  out({from, done}: T): void {
    gsap.to(from, {duration: 0.25, opacity: 0, onComplete: done})
  }
}

export default Basic
