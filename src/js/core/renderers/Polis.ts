import Highway from '@dogstudio/highway'
import {PageLoader} from '@/components/loaders/PageLoader'
import {clients, IClients} from '@/components/clients'
import {onLoaded} from '@/utils/onLoaded'
import Slideshow from '@/components/slider/Slideshow'

export default class Polis extends Highway.Renderer {
  clients: IClients

  onEnterCompleted(): void {
    onLoaded(() => {
      PageLoader.load()
      this.clients = clients()
      new Slideshow(document.querySelector('.services-instruction__slider'), 0)
    })
  }
  onLeave(): void {
    this.clients.destroy()
  }
}
