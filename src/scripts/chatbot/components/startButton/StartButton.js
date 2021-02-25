import { h } from 'preact'

const StartButton = props => {
  const { className, handleToggle } = props
  const uiClass = `p-chatbot__startButton ${className}`

  return <div className={uiClass} onClick={handleToggle} />
}

export default StartButton
