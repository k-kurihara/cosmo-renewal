export default class loading {
  constructor(elem, opts) {
    this.elem = elem
    this.opts = opts
    this.init()
  }
  init() {
    this.bindEvents()
  }
  bindEvents() {
    this.elem.addEventListener('click', () => {
      this.switchTab()
    })
  }
  switchTab() {
    const target = this.opts.target
    const other = this.opts.other
    const tabsList = document.querySelectorAll(`[data-module-tabSwitch-target]`)
    const tabs = Array.prototype.slice.call(tabsList, 0)
    this.elem.classList.add('is-active')
    other.forEach(item => {
      const otherItem = document.getElementsByClassName(`is-${item}`)[0]
      otherItem.classList.remove('is-active')
    })
    tabs.forEach(element => {
      element.classList.remove('is-active')
      if(element.getAttribute(`data-module-tabSwitch-target`) === target) {
        element.classList.add('is-active')
      }
    })
  }
}
