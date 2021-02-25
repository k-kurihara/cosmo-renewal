import { h } from 'preact'
import Header from './Header'
import Timeline from './Timeline'

const Chat = props => {
  const { className, handleToggle } = props
  const uiClass = `p-chatbot__chat ${className}`

  return (
    <div className={uiClass}>
      <Header handleToggle={handleToggle} />
      <Timeline />
    </div>
  )
}

export default Chat
