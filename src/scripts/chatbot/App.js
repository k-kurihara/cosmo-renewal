import { h, Fragment } from 'preact'
import { useState } from 'preact/hooks'
import { Chat } from './components/chat'
import { StartButton } from './components/startButton'

const App = () => {
  const [isOpen, setIsOpen] = useState(false)

  const handleToggle = () => {
    setIsOpen(prev => !prev)
  }

  if (!isOpen) {
    return <StartButton handleToggle={handleToggle} />
  }

  return (
    <Fragment>
      <Chat handleToggle={handleToggle} />
    </Fragment>
  )
}

export default App
