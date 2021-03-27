export default class autoPlayMovie {
  constructor(elem, opts) {
    this.elem = elem
    this.opts = opts ? opts : ''
    this.videos = this.elem.querySelectorAll('video')
    this.videosList = Array.prototype.slice.call(this.videos, 0)
    this.init()
  }
  init() {
    this.getVideosElem()
  }
  getVideosElem() {
    this.videosList.forEach(element => {
      if(element.clientHeight !== 0) {
        this.videoPlay(element)
      }
    })
  }
  videoPlay(elem) {
    const playVideo = setInterval(() => {
      if(elem.paused) {
        elem.play()
        clearInterval(playVideo)
      } else {
        elem.pause()
      }
    }, 500)
  }
}
