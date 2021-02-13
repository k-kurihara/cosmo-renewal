import { h } from 'preact'
import Header from './Header'
import Timeline from './Timeline'

const Chat = props => {
  const { handleToggle } = props

  return (
    <div className="p-chatbot__chat">
      <Header handleToggle={handleToggle} />
      <Timeline />
    </div>
  )
}

export default Chat
