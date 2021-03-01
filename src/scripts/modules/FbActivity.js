import $ from 'jquery'
import 'slick-carousel'

export default class FbActivity {
  constructor(elem, opts) {
    this.elem = $(elem)
    this.target = document.querySelectorAll('[data-activity="target"]')
    this.init()
  }
  init() {
    this.setParameters()
  }
  setParameters() {
    const elemWidth = this.elem.outerWidth() > 500 ? 500: Math.floor(this.elem.outerWidth())
    this.elem.html(`<div class="fb-page" data-href="https://www.facebook.com/4919cosmojuku" data-tabs="timeline" data-width="${elemWidth}" data-height="${this.target[0].clientHeight}" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/4919cosmojuku" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/4919cosmojuku"></a></blockquote></div>`)
  }
}
