import { h } from 'preact'

const Avatar = isOwner => {
  if (isOwner) {
    return <div className="p-chatbot__avatar p-chatbot__avatar--owner" />
  }
  return <div className="p-chatbot__avatar --user" />
}

export default Avatar
