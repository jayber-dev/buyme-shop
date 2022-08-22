import buyme from '../../buyme-shop-product.json' assert {type: 'json'}
const categoriesIn = new Set()
const categoriesDiv = document.querySelector('.categories') 

buyme.forEach(element => {
    categoriesIn.add(element.category) 
})

categoriesIn.forEach(element => {
    // creation of each category
    const categoryDiv = document.createElement('div')
    categoryDiv.classList = "category" 
    categoryDiv.innerText = element
    categoriesDiv.appendChild(categoryDiv)
    // adding the image to each 
    const imgElem = document.createElement('img')
    imgElem.setAttribute('src', buyme[0].image)
    categoryDiv.appendChild(imgElem)
});


