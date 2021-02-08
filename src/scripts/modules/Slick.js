import $ from 'jquery'
import 'slick-carousel'

export default class slick {
  constructor(elem, opts) {
    this.elem = $(elem)
    this.opts = opts
    this.init()
  }
  init() {
    this.elem.slick({
      dots: this.opts.dots,
      dotsClass: this.opts.dotsClass
    })
  }
}
