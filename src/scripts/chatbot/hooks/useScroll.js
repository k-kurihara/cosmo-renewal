import { useState, useEffect } from 'preact/hooks'

const useScroll = () => {
  const [isScrolled, setIsScrolled] = useState(false)

  const onScroll = () => {
    if (isScrolled) {
      return
    }

    setIsScrolled(true)
  }

  useEffect(() => {
    setTimeout(() => {
      document.addEventListener('scroll', onScroll)
    }, 1000)

    return () => {
      document.removeEventListener('scroll', onScroll)
    }
  }, [])

  return {
    isScrolled,
  }
}

export default useScroll
