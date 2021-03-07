import { TweenMax } from 'gsap'

export default class flowAnimation {
  constructor(elem, opts) {
    this.elem = elem
    /**
     * オプションの詳細については下記参照
     * https://developer.mozilla.org/ja/docs/Web/API/Intersection_Observer_API
     */
    this.opts = {
      root: opts.root,
      rootMargin: opts.rootMargin,
      threshold: opts.threshold
    }
    this.delay = opts.delay
    this.targetList = this.elem.querySelectorAll('[data-module-flow-animation-roll]')
    this.target = Array.prototype.slice.call(this.targetList, 0)
    this.init()
  }
  init() {
    this.enterElement()
  }
  enterElement() {
    const callback = (entries, object) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.startAnimation()
          object.unobserve(entry.target)
        }
      })
    }
    const observer = new IntersectionObserver(callback, this.opts)
    const target = this.elem
    observer.observe(target)
  }
  startAnimation() {
    this.target.forEach((element, index) => {
      setTimeout(() => {
        TweenMax.to(element, 0.5, {
          opacity: 1,
          y: 0,
          delay : index * this.delay,
        })
      }, 500)
    })
  }
}
