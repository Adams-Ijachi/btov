const CategoryDiv = document.querySelector('.category-box')
const CategoryBtn = document.querySelector('.category-btn')

CategoryBtn.addEventListener('click', () => {
  CategoryDiv.classList.toggle('show')
})
