const pannier = document.querySelector('#pannier');
const cart = document.querySelector('.cart');
const removeCart = document.querySelector('#close-cart');
pannier.addEventListener('click',() =>{
    cart.classList.add('active');
    // alert('clicked');
});
removeCart.addEventListener('click',() =>{
    cart.classList.remove('active');
    // alert('clicked');
});

