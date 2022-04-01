const CartShow= document.querySelector('nav .icon a .span');
const addCart= document.querySelectorAll('.add-cart');
// console.log(addCart);
for (var i=0 ; i< addCart.length ;i++){
    addCart[i].addEventListener('click',()=>{
        cartCount();
    })
    
}
function cartCount() {
    let prdcount=localStorage.getItem('cartsCount');
    prdcount=parseInt(prdcount);
    if(prdcount){
        localStorage.setItem('cartsCount',prdcount+1);
        CartShow.textContent=prdcount +1;
    }
    else{
        localStorage.setItem('cartsCount',1);
        CartShow.textContent=prdcount -1;
    }
    
}
function displayCart() {
    let prdcount=localStorage.getItem('cartsCount');
    if(prdcount){
        CartShow.textContent=prdcount;
    }
    
}
displayCart();