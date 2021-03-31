import { TweenMax } from 'gsap'

export default class ashiato {
  constructor(elem, opts) {
    this.elem = elem
    this.targetName = opts.target
    this.target = document.querySelectorAll(`[data-module-ashiato-roll="${this.targetName}"]`)
    this.targetList = Array.prototype.slice.call(this.target, 0)
    this.opts = {
      root: opts.setting.root,
      rootMargin: opts.setting.rootMargin,
      threshold: opts.setting.threshold
    }
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
    this.targetList.forEach(target => {
      const children = target.querySelectorAll(`[data-module-ashiato-roll="${this.targetName}-children"]`)
      const childrenList = Array.prototype.slice.call(children, 0)
      childrenList.forEach((element, index) => {
        setTimeout(() => {
          TweenMax.to(element, 0.2, {
            opacity: 1
          })
        }, index * 150);
      });
    })
  }
}
