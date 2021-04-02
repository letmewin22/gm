import Highway from '@dogstudio/highway'
import {PageLoader} from '@/components/loaders/PageLoader'
import {onLoaded} from '@/utils/onLoaded'

class Contacts extends Highway.Renderer {
  onEnterCompleted(): void {
    onLoaded(() => {
      PageLoader.load()
    })
  }
}
// Don`t forget to export your renderer
export default Contacts
