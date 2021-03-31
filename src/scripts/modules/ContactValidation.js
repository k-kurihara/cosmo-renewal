import $ from 'jquery'
import 'slick-carousel'

export default class ContactValidation {
  constructor(elem) {
    setTimeout(()=>{
      this.elem = $(elem)
      this.input = this.elem.find('input')
      this.target = this.elem.find('[data-contact-validation-target]')
      this.type = this.target.data('contact-validation-target')
      this.init()
    }, 1000)
  }
  init() {
    this.bindEvent()
  }

  bindEvent() {
    this.input.on('blur',(e)=>{
      const cur = e.currentTarget
      switch (this.type) {
        case 'name':
          this.nameValidation(cur)
          break;
        case 'preferredDate':
          this.preferredDateValidation(cur)
          break;
        case 'postalCode':
          this.postalCodeValidation(cur)
          break;
        case 'address':
          this.addressValidation(cur)
          break;
        case 'tel':
          this.telValidation(cur)
          break;
        case 'mail':
          this.mailValidation(cur)
          break;
        case 'mailCheck':
          this.mailCheckValidation(cur)
          break;
      }
    })
  }
  errorInput() {
    this.target.addClass('is-show')
    this.elem.removeClass('is-success')
    const EventHandler = $(document.querySelectorAll('[data-contact-validation="eventHandler"]'))
    EventHandler.trigger('formChange')
  }

  successInput() {
    this.target.text('')
    this.target.removeClass('is-show')
    this.elem.addClass('is-success')
    const EventHandler = $(document.querySelectorAll('[data-contact-validation="eventHandler"]'))
    EventHandler.trigger('formChange')
  }

  nameValidation(target) {
    const value = target.value
    if(!value.length) {
      this.target.text('お名前をご入力ください。')
      this.errorInput()
    } else {
      this.successInput()
    }
  }

  preferredDateValidation(target) {
    const value = target.value
    if(!value.length) {
      this.target.text('ご希望の体験日時をご入力ください。')
      this.errorInput()
    } else {
      this.successInput()
    }
  }

  postalCodeValidation(target) {
    const value = target.value
    if(!value.length) {
      this.target.text('郵便番号をご入力ください。')
      this.errorInput()
    } else if(this.postalCodeCheck(value)) {
      this.target.text('正しい郵便番号をご入力ください。')
      this.errorInput()
    } else {
      this.successInput()
    }
  }
  postalCodeCheck(value) {
    let isCheck = true
    let pattern = /^[0-9]{3}-[0-9]{4}$/
    if(value.length === 7 && !isNaN(value)) {
      isCheck = false
    } else if (pattern.test(value)){
      isCheck = false
    }
    return isCheck
  }

  addressValidation(target) {
    const value = target.value
    if(!value.length) {
      this.target.text('住所をご入力ください。')
      this.target.addClass('is-show')
    } else {
      this.successInput()
    }
  }

  telValidation(target){
    const value = target.value
    if(!value.length) {
      this.target.text('電話番号をご入力ください。')
      this.errorInput()
    } else if(this.telCheck(value)) {
      this.target.text('正しい電話番号をご入力ください。')
      this.errorInput()
    } else {
      this.successInput()
    }
  }

  telCheck(value) {
    let isCheck = true
    let pattern = /\d{2,4}-\d{3,4}-\d{3,4}/
    if(value.length > 9 && value.length < 12 && !isNaN(value)) {
      isCheck = false
    } else if (pattern.test(value)){
      isCheck = false
    }
    return isCheck
  }

  mailValidation(target){
    const value = target.value
    if(!value.length) {
      this.target.text('メールアドレスをご入力ください。')
      this.errorInput()
    } else if(this.mailCheck(value)) {
      this.target.text('正しいメールアドレスをご入力ください。')
      this.errorInput()
    } else {
      this.successInput()
    }

    const targetVal = this.input.parent().data('contact-validation-mail-check-target')
    const triggerElm = $(document.querySelectorAll(`[data-contact-validation-mail-check-trigger="${targetVal}"]`)[0]).find('input')
    const triggerVal = triggerElm.val()

    if(triggerVal.length){
      triggerElm.trigger('blur')
    }
  }

  mailCheck(value) {
    let isCheck = true
    let pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/
    if(pattern.test(value)){
      isCheck = false
    }
    return isCheck
  }

  mailCheckValidation(target){
    const value = target.value
    const triggerVal = this.input.parent().data('contact-validation-mail-check-trigger')
    const targetVal = $(document.querySelectorAll(`[data-contact-validation-mail-check-target="${triggerVal}"]`)[0]).find('input').val()

    if(value !== targetVal){
      this.target.text('入力していただいたメールアドレスが一致しません。')
      this.errorInput()
    } else {
      this.successInput()
    }
  }
  
}
