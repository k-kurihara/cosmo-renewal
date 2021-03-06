import $ from 'jquery'
import 'slick-carousel'

export default class contactFormCheck {
  constructor(elem) {
    this.elem = $(elem)
    this.targets = this.elem.find('[data-contact-form-check="target"]')
    this.agree = this.elem.find('[data-contact-form-check-trigger="agree"]')
    this.submit = this.elem.find('[data-contact-form-check="submit"]')
    this.submitBtn = this.submit.find('a')
    console.log('this.submitBtn', this.submitBtn)
    this.init()
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
        console.log('checked')
        $(cur).addClass('is-success')
        this.elem.trigger('formChange')
      }else {
        console.log('false')
        $(cur).removeClass('is-success')
        this.elem.trigger('formChange')
      }
    })
    this.submitBtn.on('click', (e)=>{
      const AllSuccess = this.checkInputs()
      if(!AllSuccess) e.preventDefault()
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
