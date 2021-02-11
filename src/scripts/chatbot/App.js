import { h, Fragment } from 'preact'
import { useState } from 'preact/hooks'
import { Chat } from './components/chat'
import { StartButton } from './components/startButton'

const App = () => {
  return (
    <Fragment>
      <Chat />
      {/* <StartButton /> */}
    </Fragment>
  )
}

export default App
