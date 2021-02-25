const express = require('express')
const url = require('url')
const path = require('path')
const fs = require('fs')
const pug = require('pug')
const JSON5 = require('json5')

const data = JSON5.parse(fs.readFileSync('./src/data/sample.json'), 'utf8')
const teacher = JSON5.parse(fs.readFileSync('./src/data/teacher.json'), 'utf8')
const app = express()
const isExist = path => {
  try {
    fs.statSync(path)
  } catch(err) {
    if (err.code === 'ENOENT') {
      console.error(`${path} dose not exist`)
    }
    return false
  }
  return true
}

app.use(express.static('./dist'))


app.get('*', (req, res, next) => {
  const reqPath = url.parse(req.url).pathname
  const reqExtname = path.extname(path.basename(reqPath))

  if (!reqPath.match(/(\/|\.html)$/)) {
    return next()
  }

  const srcPath = reqExtname === '.html' ? reqPath.replace(reqExtname, '.pug') : path.join(reqPath, 'index.pug')

  const htmlBuffer = pug.renderFile(path.join(`./src/html`, srcPath), {
    basedir: `./src/html`,
    pretty: true,
    ...data,
    ...teacher
  })

  res.send(htmlBuffer.toString())
})


app.listen(3000, '0.0.0.0')
