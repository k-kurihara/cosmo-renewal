import { h } from 'preact'

const StartButton = props => {
  const { handleToggle } = props

  return <div className="p-chatbot__startButton" onClick={handleToggle} />
}

export default StartButton
