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
      this.switchPlayMovie(true)
    })
    this.target.addEventListener('ended', () => {
      this.switchPlayButtonShow(true)
    })
    this.target.addEventListener('click', () => {
      if (!this.target.paused) {
        this.target.pause()
        this.switchPlayButtonShow(true)
      }
    })
    this.target.addEventListener('canplaythrough', () => {
      if (this.target.paused) {
        this.elem.classList.add('is-canplay')
        this.switchPlayButtonShow(true)
      }
    })
    this.target.load()
  }
  switchPlayMovie(flg) {
    if (flg) {
      this.target.play()
      this.switchPlayButtonShow(false)
    } else {
      this.target.pause()
      this.switchPlayButtonShow(true)
    }
  }
  switchPlayButtonShow(flg) {
    if(flg) {
      this.trigger.style.display = 'block'
      this.target.style.cursor = 'auto'
    } else {
      this.trigger.style.display = 'none'
      this.target.style.cursor = 'pointer'
    }
  }
}
