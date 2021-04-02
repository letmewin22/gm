import Highway from '@dogstudio/highway'

import {home, polis, service, contacts} from '@/core/renderers'
import {Basic} from '@/core/transitions'
import {render} from '@/core/render'

const H: typeof Highway = new Highway.Core({
  renderers: {
    home,
    polis,
    service,
    contacts
  },
  transitions: {
    default: Basic
  }
})

render(H)
