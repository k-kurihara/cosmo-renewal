import { TweenMax } from 'gsap'

export default class accordion {
  constructor(elem) {
    this.elem = elem
    this.trigger = this.elem.querySelector('[data-module-accordion-roll="trigger"]')
    this.target = this.elem.querySelector('[data-module-accordion-roll="target"]')
    this.content = this.elem.querySelector('[data-module-accordion-roll="content"]')
    this.icon = this.elem.querySelector('[data-module-accordion-roll="icon"]')
    this.flg = false
    this.init()
  }
  init() {
    this.bindEvents()
  }
  bindEvents() {
    this.trigger.addEventListener('click', () => {
      this.switchAccordion(this.flg)
    })
  }
  switchAccordion(flg) {
    const contentHeight = this.content.clientHeight

    if (!flg) {
      this.icon.classList.add('open')
      this.elem.classList.add('open')
      TweenMax.to(this.target, 0.2, {
        height: `${contentHeight}px`,
        onComplete: () => {
          this.flg = true
          this.elem.classList.add('open')
        },
      })
    } else {
      this.icon.classList.remove('open')
      this.elem.classList.remove('open')
      TweenMax.to(this.target, 0.2, {
        height: '0px',
        onComplete: () => {
          this.flg = false
        },
      })
    }
  }
}
