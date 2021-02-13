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
    document.addEventListener('scroll', onScroll)

    return () => {
      document.removeEventListener('scroll', onScroll)
    }
  }, [])

  return {
    isScrolled,
  }
}

export default useScroll
