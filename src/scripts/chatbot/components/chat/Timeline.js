import { h } from 'preact'
import { useState, useEffect, useCallback } from 'preact/hooks'
import { v4 as uuidv4 } from 'uuid'
import ownerMessages from '../../data/messages/owner'
import { createUserMessage } from '../../data/messages/user'
import Communication from './Communication'

const Timeline = () => {
  const [timeline, setTimeline] = useState([])

  const handleClickQuestion = useCallback(({ messageId, questionId }) => {
    const answer = ownerMessages.find(message => message.questionId === questionId)

    if (!answer) {
      return
    }

    setTimeline(prev => {
      // console.log('1', prev)
      // console.log('messageId', messageId)
      // console.log('questionId', questionId)
      const hoge = prev.map(
        a =>
          a.id === messageId
            ? Object.assign({}, a, {
                isActive: false,
                message: a.message.map(
                  b =>
                    b.id === questionId
                      ? Object.assign({}, b, {
                          isSelected: true,
                        })
                      : Object.assign({}, b, {
                          isSelected: false,
                        }),
                ),
              })
            : a,
      )

      const newTimeline = [...hoge, answer]
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
