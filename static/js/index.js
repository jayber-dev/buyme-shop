import buyme from '../../buyme-shop-product.json' assert {type: 'json'}
const categoriesIn = new Set()

buyme.forEach(element => {
    categoriesIn.add(element.category)
})
categoriesIn.forEach(element => {
      
    const categoriesDiv = document.querySelector('.categories')  
    const categoryDiv = document.createElement('div')
    categoryDiv.classList = "category" 
    categoryDiv.innerText = element
    categoriesDiv.appendChild(categoryDiv)
    
});


console.log(categoriesIn);