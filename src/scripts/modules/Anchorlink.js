export default class anchorlink {
  constructor(elem, opts) {
    this.elem = elem
    this.pageName = opts.pageName
    this.url = location.href

    if (this.url.indexOf('?target=') !== -1) {
      this.origin = location.origin
      this.page = this.url.replace(this.origin, '')
      this.parameters = this.page.replace(`/${this.pageName}/`, '')
      this.target = this.parameters.replace('?target=', '')

      this.headerHeight = document.getElementsByClassName('c-header')[0].clientHeight

      this.toY
      this.currentY = window.pageYOffset
      this.divisor = 10
      this.range = (this.divisor / 2) + 1;
      this.targetElem = document.getElementById(this.target)
      this.targetRect = this.targetElem.getBoundingClientRect()
      this.targetY = this.targetRect.top + this.currentY - this.headerHeight

      this.init()
    }
  }
  init() {
    this.getUrlParameters()
  }
  getUrlParameters() {
      this.smoothScroll()
  }
  smoothScroll() {
    this.toY = this.currentY + Math.round((this.targetY - this.currentY) / this.divisor)
    window.scrollTo(0, this.toY)

    this.currentY = this.toY

    if (this.toY >= this.targetY + this.range || this.toY <= this.targetY - this.range) {
      setTimeout(() => {
        this.smoothScroll()
      }, 10)
    } else {
      window.scrollTo(0, this.targetY);
    }
  }
}
