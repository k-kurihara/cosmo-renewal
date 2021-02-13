import { h } from 'preact'
import { useState } from 'preact/hooks'
import useScroll from './hooks/useScroll'
import { Chat } from './components/chat'
import { StartButton } from './components/startButton'

const App = () => {
  const [isChatOpen, setIsChatOpen] = useState(false)
  const { isScrolled } = useScroll()

  const handleToggle = () => {
    setIsChatOpen(prev => !prev)
  }

  if (isChatOpen) {
    return <Chat handleToggle={handleToggle} />
  }

  if (!isScrolled) {
    return null
  }

  return <StartButton handleToggle={handleToggle} />
}

export default App
