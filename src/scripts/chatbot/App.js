import { h, Fragment } from 'preact'
import { useState, useMemo } from 'preact/hooks'
import useScroll from './hooks/useScroll'
import { Chat } from './components/chat'
import { StartButton } from './components/startButton'

const App = () => {
  const [isChatOpen, setIsChatOpen] = useState(false)
  const { isScrolled } = useScroll()

  const handleToggle = () => {
    setIsChatOpen(prev => !prev)
  }

  const createStartButtonClass = useMemo(
    () => {
      if (!isChatOpen && isScrolled) {
        return 'is-show'
      }
      return ''
    },
    [isChatOpen, isScrolled],
  )

  return (
    <Fragment>
      <StartButton className={createStartButtonClass} handleToggle={handleToggle} />
      <Chat className={isChatOpen ? 'is-show' : ''} handleToggle={handleToggle} />
    </Fragment>
  )
}

export default App
