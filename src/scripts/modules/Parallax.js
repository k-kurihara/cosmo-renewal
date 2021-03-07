import { TweenMax } from 'gsap'

export default class parallax {
  constructor(elem, opts) {
    this.elem = elem
    /**
     * オプションの詳細については下記参照
     * https://developer.mozilla.org/ja/docs/Web/API/Intersection_Observer_API
     */
    this.header = document.getElementsByClassName('c-header')[0]
    this.headerHeight = this.header.clientHeight
    this.opts = {
      root: opts.root,
      rootMargin: `${this.headerHeight + 100}px 0px ${this.headerHeight + 100}px 0px `,
      threshold: opts.threshold
    }
    this.delay = opts.delay
    this.coefficient = opts.coefficient
    if(this.elem.clientHeight !== 0) {
      this.init()
    }
  }
  init() {
    this.eventBinds()
    this.setting()
    this.enterElement()
  }
  eventBinds() {
    window.addEventListener('resize', () => {
      this.header = document.getElementsByClassName('c-header')[0]
      this.headerHeight = this.header.clientHeight
    })
  }
  enterElement() {
    const callback = entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.parallax(entry.isIntersecting)
        } else {
          this.parallax(entry.isIntersecting)
        }
      })
    }
    const observer = new IntersectionObserver(callback, this.opts)
    const target = this.elem
    observer.observe(target)
  }
  parallax(flg) {
    if(flg === true) {
      window.addEventListener('scroll', this.setting = () => {
        const browserHeight = window.innerHeight
        const targetHeight = this.elem.clientHeight
        const targetBottom = this.elem.getBoundingClientRect().bottom
        const calc = (targetHeight - (targetBottom - this.headerHeight - browserHeight)) / this.coefficient

        // if(0 + calc <= 100) {
        //   TweenMax.set(this.elem, {
        //     backgroundPosition: `center ${0 + calc}%`,
        //   })
        // }

        this.elem.style.backgroundPosition = `center ${0 + calc}%`
      })
    } else {
      window.removeEventListener('scroll', this.setting)
    }
  }
  setting() {
    TweenMax.set(this.elem, {
      backgroundPosition: `center 0%`,
      transition: 'all 0.1s',
      backfaceVisibility: 'hidden',
      transform: 'translate3d(0, 0, 0)'
    })
  }
}
