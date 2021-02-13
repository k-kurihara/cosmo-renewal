import { h } from 'preact'
import { useState, useEffect, useCallback } from 'preact/hooks'
import { v4 as uuidv4 } from 'uuid'
import ownerMessages from '../../data/messages/owner'
import { createUserMessage } from '../../data/messages/user'
import Communication from './Communication'

const Timeline = () => {
  const [timeline, setTimeline] = useState([])

  const handleClickQuestion = useCallback(({ isActive, messageId, questionId }) => {
    if (!isActive) {
      return
    }

    const answer = ownerMessages.find(message => message.questionId === questionId)
    if (!answer) {
      return
    }

    setTimeline(prev => {
      const changedTimeline = prev.map(
        prevTarget =>
          prevTarget.id === messageId
            ? {
                ...prevTarget,
                isActive: false,
                message: prevTarget.message.map(
                  prevMessage =>
                    prevMessage.id === questionId
                      ? { ...prevMessage, isSelected: true }
                      : { ...prevMessage, isSelected: false },
                ),
              }
            : prevTarget,
      )

      const newTimeline = [...changedTimeline, answer]
      return newTimeline
    })
  })

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
          isActive={item.isActive}
          handleClickQuestion={handleClickQuestion}
        />
      ))}
    </div>
  )
}

export default Timeline
