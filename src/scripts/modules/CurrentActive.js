export default class currentActive {
  constructor(elem, opts) {
    this.elem = elem
    this.opts = opts
    this.init()
  }
  init() {
    this.getCurrentPage()
  }
  getCurrentPage() {
    const url = location.href
    const root = location.origin
    const page = url.replace(root, '').replace('index.html', '')
    this.settingActiveClass(page)
  }
  settingActiveClass(page) {
    console.log(page)
    this.elem.classList.remove('active')

    if (page.indexOf('about') !== -1 && this.opts.name === 'about') {
      this.elem.classList.add('active')
    } else if (page.indexOf('flow') !== -1 && this.opts.name === 'about') {
      this.elem.classList.add('active')
    } else if (page.indexOf('teachers') !== -1 && this.opts.name === 'about') {
      this.elem.classList.add('active')
    } else if (page.indexOf('course') !== -1 && this.opts.name === 'course') {
      this.elem.classList.add('active')
    } else if (page.indexOf('topics') !== -1 && this.opts.name === 'topics') {
      this.elem.classList.add('active')
    } else if (page === '/' && this.opts.name === 'top') {
      this.elem.classList.add('active')
    }
  }
}
