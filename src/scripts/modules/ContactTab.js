import $ from 'jquery'
import 'slick-carousel'

export default class contactTab {
  constructor(elem) {
    this.elem = $(elem)
    this.trigger = $(document.querySelectorAll('[data-contact-tab="trigger"]'))
    this.target = $(document.querySelectorAll('[data-contact-tab="target"]'))
    this.init()
  }
  init() {
    this.trigger.on('click', (e) => {
      const target = e.currentTarget.dataset.contactTabTrigger
      this.triggerActive(target)
      this.targetActive(target)
    })
  }

  triggerActive(target){
    this.trigger.removeClass('is-active')
    this.trigger.each((i, el)=>{
      var cur = $(el).data().contactTabTrigger
      if(cur == target) {
        $(el).addClass('is-active')
      }
    })
  }

  targetActive(target){
    this.target.removeClass('is-active')
    this.target.each((i, el)=>{
      var cur = $(el).data().contactTabTarget
      if(cur == target) {
        $(el).addClass('is-active')
      }
    })
  }
}
