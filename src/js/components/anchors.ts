import gsap from 'gsap'

export const anchors = (): void => {
  const a = document.querySelectorAll(
    '[data-href]'
  ) as NodeListOf<HTMLAnchorElement>

  a.forEach(link =>
    link.addEventListener('click', (e: Event) => {
      e.preventDefault()
      const target = document.querySelector(link.dataset.href)
      const coords = target.getBoundingClientRect()
      gsap.to(document.documentElement, {duration: 1, scrollTop: coords.top})
      setTimeout(() => {
        window.location.hash = link.dataset.href
      }, 1001)
    })
  )
}
