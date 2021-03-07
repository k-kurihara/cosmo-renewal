import { TimelineMax } from 'gsap'

export default class loading {
  constructor(elem) {
    this.elem = elem
    this.body = document.querySelector('body')
    this.inner = this.elem.querySelector('[data-module-loading-roll="inner"]')
    this.background = this.elem.querySelector('[data-module-loading-roll="background"]')
    this.overlay = this.elem.querySelector('[data-module-loading-roll="overlay"]')
    this.text = this.elem.querySelector('[data-module-loading-roll="text"]')
    this.init()
  }
  init() {
    if (window.sessionStorage.getItem('load') !== 'true') {
      this.afterLoading(true)
    } else {
      this.afterLoading(false)
    }
  }
  afterLoading(flg) {
    if (flg) {
      const tl = new TimelineMax()

      this.body.style.overflow = 'hidden'

      tl.to(this.overlay, 0.2, {
        x: '0',
      }, 0.5).to(this.text, 2.0, {
        opacity: '1',
      }, 0.7).to(this.text, 0.75, {
        opacity: '0',
      }, 2.7).to(this.elem, 0.75, {
        scaleX: '0',
        transformOrigin: 'right',
        onComplete: () => {
          this.body.style.overflow = 'auto'
          this.elem.remove()
          window.sessionStorage.setItem('load', 'true')
        }
      }, 3.45)
    } else {
      this.elem.remove()
    }
  }
}
