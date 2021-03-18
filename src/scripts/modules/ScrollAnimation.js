import { TweenMax, TimelineMax } from 'gsap'

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
          this.elem.classList.add('is-show')
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
    } else if (this.animation === 'tori') {
      const ashiato1 = document.querySelector('[data-module-roll="tori_no_ashiato_1"]')
      const ashiato2 = document.querySelector('[data-module-roll="tori_no_ashiato_2"]')
      const ashiato3 = document.querySelector('[data-module-roll="tori_no_ashiato_3"]')
      /**
       * animationの指定がtoriのとき
       */
      const tl = new TimelineMax
      setTimeout(() => {
        tl.to(target, 0.1, {
          opacity: '0.1',
          x: '-90%',
          rotate: '10deg'
        }).to(target, 0.1, {
          opacity: '0.2',
          x: '-80%',
          rotate: '0deg',
        }).to(target, 0.1, {
          opacity: '0.3',
          x: '-70%',
          rotate: '10deg'
        }).to(target, 0.1, {
          opacity: '0.4',
          x: '-60%',
          rotate: '0deg',
          onComplete: () => {
            TweenMax.to(ashiato1, 0.2, {
              opacity: 1
            })
          }
        }).to(target, 0.1, {
          opacity: '0.5',
          x: '-50%',
          rotate: '10deg'
        }).to(target, 0.1, {
          opacity: '0.6',
          x: '-40%',
          rotate: '0deg'
        }).to(target, 0.1, {
          opacity: '0.7',
          x: '-30%',
          rotate: '10deg',
          onComplete: () => {
            TweenMax.to(ashiato2, 0.2, {
              opacity: 1
            })
          }
        }).to(target, 0.1, {
          opacity: '0.8',
          x: '-20%',
          rotate: '0deg'
        }).to(target, 0.1, {
          opacity: '0.9',
          x: '-10%',
          rotate: '10deg',
          onComplete: () => {
            TweenMax.to(ashiato3, 0.2, {
              opacity: 1
            })
          }
        }).to(target, 0.1, {
          opacity: '1.0',
          x: '0%',
          rotate: '0deg'
        })
      }, 500)
    }
  }
}
