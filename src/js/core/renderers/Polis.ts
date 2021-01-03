import Highway from '@dogstudio/highway'
import {PageLoader} from '@/components/loaders/PageLoader'
import {clients, IClients} from '@/components/clients'
import {onLoaded} from '@/utils/onLoaded'

export default class Polis extends Highway.Renderer {
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
