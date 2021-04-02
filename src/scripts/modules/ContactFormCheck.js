import $ from 'jquery'
import 'slick-carousel'

export default class contactFormCheck {
  constructor(elem) {
    setTimeout(()=>{
      this.elem = $(elem)
      this.targets = this.elem.find('[data-contact-form-check="target"]')
      this.agree = this.elem.find('[data-contact-form-check-trigger="agree"]')
      this.submit = this.elem.find('[data-contact-form-check="submit"]')
      this.submitBtn = this.submit.find('a')
      this.submitForm = this.submitBtn.find('[type="submit"]')
      this.init()
    }, 1000)
  }
  init() {
    this.elem.on('formChange', ()=>{
      const AllSuccess = this.checkInputs()
      if(AllSuccess){
        this.submit.addClass('is-enabled')
      } else {
        this.submit.removeClass('is-enabled')
      }
    })
    this.agree.on('change', (e)=>{
      const cur = e.currentTarget
      if(cur.checked){
        $(cur).addClass('is-success')
        this.elem.trigger('formChange')
      }else {
        $(cur).removeClass('is-success')
        this.elem.trigger('formChange')
      }
    })

    this.submitBtn.on('click', (e)=>{
      const AllSuccess = this.checkInputs()
      e.preventDefault()
      if(!AllSuccess){
        e.preventDefault()
      }
    })
  }

  checkInputs() {
    let AllSuccess = true

    this.targets.each((i, targetElem)=>{
      if(!$(targetElem).hasClass('is-success')) {
        AllSuccess = false
        return
      }
    })
    return AllSuccess
  }
}
