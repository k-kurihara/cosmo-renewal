import { pascalCase } from '../utils/'

/**
 * @returns {Class} New Constructor
 */
Array.prototype.forEach.call(document.querySelectorAll('[data-module]'), element => {
  const keys = element.getAttribute('data-module').split(/\s+/)
  const opts = element.getAttribute('data-options') || null

  keys.forEach(key => {
    const Module = require(`./${pascalCase(key)}`).default
    const options = opts ? (keys.length > 1 ? JSON.parse(opts)[key] : JSON.parse(opts)) : {}

    if (Module !== void 0) return new Module(element, options)
  })
})
