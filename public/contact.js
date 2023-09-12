// const successBtn = document.querySelector('.success-btn')
const formSubmit = document.getElementById('contactForm')
const success = document.querySelector('.success')
const successBtn = document.querySelector('.success-btn')
const overlay = document.querySelector('.overlay')

formSubmit.addEventListener('click', (e) => {
  e.preventDefault()

})
successBtn.addEventListener('click', () => {
  success.classList.remove('successful')
  overlay.classList.remove('overlay-active')
  // location.reload()
})
