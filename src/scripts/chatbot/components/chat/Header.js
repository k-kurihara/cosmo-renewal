import { h } from 'preact'

const Header = props => {
  const { handleToggle } = props

  return (
    <div className="p-chatbot__header">
      <p className="p-chatbot__title">コスモチャット</p>
      <div className="p-chatbot__close" onClick={handleToggle}>
        ×
      </div>
    </div>
  )
}

export default Header
