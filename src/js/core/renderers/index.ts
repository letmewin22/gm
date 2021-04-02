export const home = (): Promise<any> => {
  return import(/* webpackChunkName: "home" */ './Home')
}

export const contacts = (): Promise<any> => {
  return import(/* webpackChunkName: "contacts" */ './Contacts')
}

export const polis = (): Promise<any> => {
  return import(/* webpackChunkName: "polis" */ './Polis')
}

export const service = (): Promise<any> => {
  return import(/* webpackChunkName: "service" */ './Service')
}
