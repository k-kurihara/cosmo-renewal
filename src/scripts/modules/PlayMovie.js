export default class playMovie {
  constructor(elem) {
    this.elem = elem
    this.trigger = this.elem.querySelector('[data-module-playmovie-roll="trigger"]')
    this.target = this.elem.querySelector('[data-module-playmovie-roll="target"]')
    this.init()
  }
  init() {
    this.bindEvents()
  }
  bindEvents() {
    this.trigger.addEventListener('click', () => {
      this.switchPlayMovie()
    })
    this.target.addEventListener('ended', () => {
      this.switchPlayButtonShow(true)
    })
  }
  switchPlayMovie() {
    this.target.play()
    this.switchPlayButtonShow(false)
  }
  switchPlayButtonShow(flg) {
    if(flg) {
      this.trigger.style.display = 'block'
    } else {
      this.trigger.style.display = 'none'
    }
  }
}
