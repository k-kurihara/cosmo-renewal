import $ from 'jquery'
import 'slick-carousel'

export default class slick {
  constructor(elem, opts) {
    this.elem = $(elem)
    this.opts = opts
    this.trigger = document.querySelectorAll('[data-module-slick-trigger]')
    this.triggerArr = Array.prototype.slice.call(this.trigger)
    this.init()
  }
  init() {
    this.elem.slick({
      dots: this.opts.dots,
      dotsClass: this.opts.dotsClass
    })
    this.bindEvetns()
  }
  bindEvetns() {
    if(this.triggerArr.length >= 0) {
      this.triggerArr.forEach(element => {
        const targetName = element.getAttribute('data-module-slick-target-name')
        const num = Number(element.getAttribute('data-module-slick-trigger')) - 1
        element.addEventListener('click', () => {
          this.goToSlick(targetName, num)
        })
      });
    }
  }
  goToSlick(targetName, num) {
    const target = document.querySelector(`[data-module-slick-name="${targetName}"]`)
    $(target).slick('slickGoTo', num, false);
  }
}
