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
    this.enterElement()
  }
  getVideosElem() {
    this.videosList.forEach(element => {
      if(element.clientHeight !== 0) {
        this.videoPlay(element)
      }
    })
  }
  enterElement() {
    const callback = entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          this.switchVideoPlay(entry, true)
        } else {
          this.switchVideoPlay(entry, false)
        }
      })
    }
    const observer = new IntersectionObserver(callback)
    const target = this.elem
    observer.observe(target)
  }
  switchVideoPlay(entry, flg) {
    const video = entry.target.querySelectorAll('video')
    const videosList = Array.prototype.slice.call(video, 0)
    videosList.forEach(element => {
      if(element.clientHeight !== 0) {
        if(flg) {
          element.pause()
        } else {
          element.play()
        }
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
    }, 100)
  }
}
