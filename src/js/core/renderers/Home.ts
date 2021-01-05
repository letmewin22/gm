import Highway from '@dogstudio/highway'
import {PageLoader} from '@/components/loaders/PageLoader'
import {onLoaded} from '@/utils/onLoaded'
import {clients, IClients} from '@/components/clients'
import {ShowMore} from '@/components/ShowMore'

class Home extends Highway.Renderer {
  clients: IClients

  onEnterCompleted(): void {
    onLoaded(() => {
      PageLoader.load()
      new ShowMore()

      this.clients = clients()
    })
  }
  onLeave(): void {
    this.clients.destroy()
  }
}
// Don`t forget to export your renderer
export default Home
