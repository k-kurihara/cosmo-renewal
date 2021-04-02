import $ from 'jquery'
import 'slick-carousel'

export default class ContactFormSubmit {
  constructor(elem) {
    setTimeout(()=>{
      console.log('ContactFormSubmit')
      this.elem = $(elem)
      this.submitBtn = this.elem.find('a')
      this.submitForm = this.submitBtn.find('[type="submit"]')
      this.init()
    }, 1000)
  }
  init() {
    this.submitBtn.on('click', (e)=>{
      e.preventDefault()
      this.submitForm.trigger('click')
    })

    this.submitForm.on('click', (e)=>{
      console.log('submitForm click')
      e.stopPropagation();
    })
  }
}
