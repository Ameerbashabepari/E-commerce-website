// cart
let cartIcon = document.querySelector("#cart-icon");
let carts = document.querySelector(".carts");
let closeCart = document.querySelector("#close-cart");
//open cart
cartIcon.onclick = () => {
    carts.classList.add("active");
};
//close cart
closeCart.onclick = () => {
    carts.classList.remove("active");
};


//cart working
if(document.readyState=="loading"){
    document.addEventListener("DOMContentLoaded", ready);
}
else{
    ready();
}


//making function
function ready(){
    //remove ite from cart
    var removecartbuttons=document.getElementsByClassName("cart-remove")
    console.log(removecartbuttons)
    for(var i=0;i<removecartbuttons.length;i++){
        var button=removecartbuttons[i];
        button.addEventListener("click", removeCartItem);
    }

//quantity change
var quantityInputs=document.getElementsByClassName("cart-quantity");
for(var i=0;i<quantityInputs.length;i++){
    var input=quantityInputs[i];
    input.addEventListener("change", quantityChanged);
}
}
 //remove ite from cart
 function removeCartItem(event){
    var buttonClicked=event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
 }
//quantity change
function quantityChanged(event){
    var input=event.target
    if(isNaN(input.value)|| input.value<=0){
        input.value=1;
    }
    updatetotal();
}

 //update total
function updatetotal(){
    var cartContent=document.getElementsByClassName("cart-content")[0];
    var cartBoxes=cartContent.getElementsByClassName("cart-box");
    var total=0;
    for(var i=0;i<cartBoxes.length;i++){
        var cartBox=cartBoxes[i];
        var priceElement=cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement=cartBox.getElementsByClassName("cart-quantity")[0];    
        var price=parseFloat(priceElement.innerText.replace("₹", ""));
        var quantity=quantityElement.value;
        total=total+(price*quantity);
        total=math.round(total*100)/100;
        document.getElementsByClassName('total-price')[0].innerText='₹'+total;
    }
 }