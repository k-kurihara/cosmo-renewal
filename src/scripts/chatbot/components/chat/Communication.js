import { h } from 'preact'
import Avatar from './Avatar'
import Message from './Message'

const Communication = props => {
  const { id, isOwner, message, isActive, handleClickQuestion } = props

  if (isOwner) {
    return (
      <div className="p-chatbot__communication">
        <Avatar isOwner={isOwner} />
        <Message id={id} isOwner={isOwner} message={message} />
      </div>
    )
  }

  return (
    <div className="p-chatbot__communication">
      <Message
        id={id}
        isOwner={isOwner}
        message={message}
        isActive={isActive}
        handleClickQuestion={handleClickQuestion}
      />
      <Avatar isOwner={isOwner} />
    </div>
  )
}

export default Communication
