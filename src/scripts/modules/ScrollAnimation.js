import { TweenMax } from 'gsap'

export default class scrollAnimation {
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
    this.animation = opts.animation
    this.init()
  }
  init() {
    this.enterElement()
  }
  enterElement() {
    const callback = (entries, object) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.startAnimation(entry.target)
          object.unobserve(entry.target)
        }
      })
    }
    const observer = new IntersectionObserver(callback, this.opts)
    const target = this.elem
    observer.observe(target)
  }
  startAnimation(target) {
    if(this.animation === 'fadeUp') {
      /**
       * animationの指定がfadeUpのとき
       */
      TweenMax.to(target, 1, {
        opacity: 1,
        y: 0,
      })
    } else if (this.animation === 'swipeIn') {
      /**
       * animationの指定がswipeInのとき
       */
      target.classList.add('swipeIn')
      setTimeout(() => {
        target.classList.remove('swipeIn')
      }, 250)
    }
  }
}
