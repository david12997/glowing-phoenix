export const CartScreen = () =>{


    const openCart = document.getElementsByClassName('carrito');
    const closeCart = document.getElementsByClassName('iconCloseCart');
    const screenCart = document.getElementsByClassName('screenCart')

    closeCart[0].addEventListener('click',()=>{

        screenCart[0].style.animationName = "closeCart";
        setTimeout(() => {
            screenCart[0].style.display = "none";
        }, 300);


    });

    for(let i=0; i<openCart.length;i++){

        openCart[i].addEventListener('click',()=>{

            screenCart[0].style.display = "block";
            screenCart[0].style.animationName = "openCart";

        });
    }
}