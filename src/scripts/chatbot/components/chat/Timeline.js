import { h } from 'preact'
import { useState, useEffect, useCallback } from 'preact/hooks'
import { v4 as uuidv4 } from 'uuid'
import ownerMessages from '../../data/messages/owner'
import { createUserMessage } from '../../data/messages/user'
import Communication from './Communication'

const Timeline = () => {
  const [timeline, setTimeline] = useState([])

  const handleClickQuestion = useCallback(
    ({ messageId, questionId }) => {
      const answer = ownerMessages.find(message => message.questionId === questionId)
      if (!answer) {
        return
      }

      const userMessage = timeline.find(target => target.id === messageId)
      if (!userMessage) {
        return
      }

      const updatedUserMessage = userMessage.message.map(
        prevMessage =>
          prevMessage.id === questionId ? { ...prevMessage, isSelected: true } : { ...prevMessage, isSelected: false },
      )
      const newUserMessage = { ...userMessage, message: updatedUserMessage }

      const newTimeline = [timeline[0], newUserMessage, answer]

      setTimeline(newTimeline)
    },
    [timeline],
  )

  useEffect(() => {
    const timeline = [ownerMessages[0], createUserMessage()].map(message => ({
      ...message,
      id: uuidv4(),
    }))

    setTimeline(timeline)
  }, [])

  return (
    <div className="p-chatbot__timeline">
      {timeline.map(item => (
        <Communication
          key={item.id}
          id={item.id}
          isOwner={item.isOwner}
          message={item.message}
          handleClickQuestion={handleClickQuestion}
        />
      ))}
    </div>
  )
}

export default Timeline
