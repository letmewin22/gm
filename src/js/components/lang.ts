export const lang = (): void => {
  const langBtn: HTMLElement = document.querySelector('.navbar__lang-current')
  const hreflangs: NodeListOf<HTMLElement> = document.querySelectorAll(
    '[rel="alternate"]'
  )
  const otherLangs: NodeListOf<HTMLElement> = document.querySelectorAll(
    '.navbar__lang-link'
  )
  const translateUrlNode: HTMLElement = document.querySelector(
    '[data-translate-urls]'
  )

  if (
    !translateUrlNode.dataset.translateUrls ||
    !translateUrlNode.dataset.codes
  ) {
    return
  }

  const translateUrls = translateUrlNode.dataset.translateUrls.split(',')
  const currentLang = translateUrlNode.dataset.currentLang
  const langCodes = translateUrlNode.dataset.codes.split(',')

  langBtn.innerText = currentLang

  otherLangs.forEach((el, idx) => {
    hreflangs[idx].setAttribute('hreflang', langCodes[idx])
    hreflangs[idx].setAttribute('href', translateUrls[idx])

    if (el.innerHTML.toLowerCase() === currentLang.toLowerCase()) {
      el.classList.add('is-active')
      return
    }
    el.setAttribute('href', translateUrls[idx])
    el.setAttribute('hreflang', langCodes[idx])
    // el.setAttribute('hreflang', currentLang)
  })
}
