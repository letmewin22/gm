import Highway from '@dogstudio/highway'
import {PageLoader} from '@/components/loaders/PageLoader'
import {onLoaded} from '@/utils/onLoaded'
import {clients, IClients} from '@/components/clients'

class Home extends Highway.Renderer {
  clients: IClients

  onEnterCompleted(): void {
    onLoaded(() => {
      PageLoader.load()

      this.clients = clients()
    })
  }
  onLeave(): void {
    this.clients.destroy()
  }
}
// Don`t forget to export your renderer
export default Home
