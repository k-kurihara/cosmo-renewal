import { TweenMax, Power2 } from 'gsap'

export default class slick {
  constructor(elem, opts) {
    this.elem = elem
    this.opts = opts
    this.elemHeight
    this.bh
    this.percentage
    this.init()
  }
  init() {
    this.bindEvents()
  }
  bindEvents() {
    window.addEventListener('load', () => {
      this.elemHeight = this.elem.clientHeight
      this.bh = window.innerHeight
      this.percentage = Math.round((this.elemHeight / this.bh) * 100)
    })
    window.addEventListener('resize', () => {
      this.elemHeight = this.elem.clientHeight
      this.bh = window.innerHeight
      this.percentage = Math.round((this.elemHeight / this.bh) * 100)
    })
    document.addEventListener('scroll', () => {
      this.setting()
    })
  }
  setting() {
    const offsetY = window.pageYOffset
    const scrollBottom = this.bh + offsetY
    const calc = Math.floor(scrollBottom / this.percentage)
    this.parallax(calc * this.opts.coefficient)
  }
  parallax(calc) {
    if (calc < 100 && calc > 0) {
      TweenMax.set(this.elem, {
        backgroundPosition: `center ${calc}%`,
        ease: Power2.easeOut,
      })
    }
  }
}
