import { h } from 'preact'
import Header from './Header'
import Timeline from './Timeline'

const Chat = () => {
  return (
    <div className="p-chatbot__chat">
      <Header />
      <Timeline />
    </div>
  )
}

export default Chat
