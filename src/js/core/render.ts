import '@/libs/ie-detect'
import moveEl from '@/libs/moveEl'

import Hooks from '@core/Hooks'
import {state} from '@/state'

import {resize} from '@emotionagency/utils'
import {winH} from '@/utils/winH'
import Dropdown from '@/components/Dropdown'
import {Nav} from '@/components/Nav'

export const render = <T>(H: T): void => {
  const hooks = new Hooks(H)

  hooks.useNavigateOut(() => {
    state.isLoaded = false
  })

  hooks.useNavigateEnd(() => {
    state.isLoaded = true
  })

  hooks.useBothStart(() => {
    moveEl()
  })

  hooks.useLoad(() => {
    resize.on(winH)
    const dropdown = new Dropdown({
      btn: '.dropdown__btn',
      items: '.dropdown__content',
      parent: '.dropdown'
    })
    dropdown.init()

    new Nav()
  })

  const links = document.querySelectorAll('nav a')

  hooks.useBoth(async() => {
    const {default: Form} = await import(
      /* webpackChunkName: "form" */
      '@emotionagency/form'
    )

    new Form('#form', {
      URL: 'http://localhost:8080/api/mail.php'
    })

    links.forEach((link: HTMLLinkElement) => {
      link.classList.remove('is-active')
      link.href === location.href && link.classList.add('is-active')
    })
  })
}
