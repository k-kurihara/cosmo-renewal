import { h, render } from 'preact'
import App from './App'

document.addEventListener('DOMContentLoaded', () => {
  render(<App />, document.getElementById('chatbot'))
})
