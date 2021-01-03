export const home = (): Promise<any> => {
  return import(/* webpackChunkName: "home" */ './Home')
}

export const polis = (): Promise<any> => {
  return import(/* webpackChunkName: "polis" */ './Polis')
}
