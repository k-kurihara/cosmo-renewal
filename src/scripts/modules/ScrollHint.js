export default class scrollHint {
  constructor(elem) {
    this.elem = elem
    this.init()
  }
  init() {
    this.bindEvents()
  }
  bindEvents() {
    this.elem.addEventListener('touchstart', () => {
      this.pointerHidden()
    })

  }
  pointerHidden() {
      this.elem.classList.add('hidden')
  }
}
