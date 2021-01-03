import Highway from '@dogstudio/highway'

import {home, polis} from '@/core/renderers'
import {Basic} from '@/core/transitions'
import {render} from '@/core/render'

const H: typeof Highway = new Highway.Core({
  renderers: {
    home,
    polis
  },
  transitions: {
    default: Basic
  }
})

render(H)
