import Highway from '@dogstudio/highway'
import {clients, IClients} from '@/components/clients'
import {PageLoader} from '@/components/loaders/PageLoader'
import {onLoaded} from '@/utils/onLoaded'

export default class Service extends Highway.Renderer {
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
