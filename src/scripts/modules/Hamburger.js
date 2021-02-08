import { TweenMax } from 'gsap'

export default class hamburger {
  constructor(elem) {
    this.elem = elem
    this.body = document.getElementsByTagName('body')[0]
    this.target = document.querySelector('[data-module-hamburger-roll="target"]')
    this.init()
  }
  init() {
    this.bindEvents()
  }
  bindEvents() {
    window.addEventListener('load', () => {
      this.settingStyle()
    })
    this.elem.addEventListener('click', () => {
      this.switchMenu()
    })
  }
  switchMenu() {
    this.elem.classList.toggle('open')
    this.settingStyle()
  }
  settingStyle() {
    if (this.elem.classList.contains('open')) {
      TweenMax.to(this.target, 0.3, {
        opacity: 1,
        overflow: 'scroll',
        pointerEvents: 'auto',
      })
      TweenMax.set(this.body, {
        overflow: 'hidden',
      })
    } else {
      TweenMax.to(this.target, 0.3, {
        opacity: 0,
        overflow: 'hidden',
        pointerEvents: 'none',
      })
      TweenMax.set(this.body, {
        overflow: 'auto',
      })
    }
  }
}
