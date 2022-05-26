const products = document.querySelectorAll('.product');

function revealProduct() {
    products.forEach((product, index) => {
        const productPosition = product.getBoundingClientRect();
            const top = productPosition.top;
            const windowHeight = window.innerHeight;
    
            const positionILook = top - windowHeight;
    
            if(positionILook < -100) {
                product.classList.add('product-animation');
                product.style.animationDelay = (index + 1) / 8 + 's';
            }  else if(positionILook >= -100) {
                product.classList.remove('product-animation');
            }
    })
}

revealProduct();

window.addEventListener('scroll', () => {
    revealProduct();
})
