import { h } from 'preact'

const Message = props => {
  const { id, isOwner, message, isActive, handleClickQuestion } = props

  if (isOwner) {
    return (
      <div className="p-chatbot__message p-chatbot__message--owner" dangerouslySetInnerHTML={{ __html: message }} />
    )
  }

  return (
    <div className="p-chatbot__message p-chatbot__message--user">
      {message.map(item => (
        <div
          key={item.id}
          className={`p-chatbot__question ${item.isSelected ? 'p-chatbot__question--selected' : ''}`}
          onClick={() => {
            if (!isActive) {
              return
            }

            handleClickQuestion({
              messageId: id,
              questionId: item.id,
            })
          }}
        >
          {item.message}
        </div>
      ))}
    </div>
  )
}

export default Message
