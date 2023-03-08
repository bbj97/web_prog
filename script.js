/***************DODAVANJE PROIZVODA U KOŠARICU**************/
var total = 0;

var addToCardButtons = document.getElementsByClassName("novo-buttons");
for(var i=0; i<addToCardButtons.length; i++) {
    var button = addToCardButtons[i];
    button.addEventListener('click', addToCartClicked);
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement
    var title = shopItem.getElementsByClassName('novo-naziv-pr')[0].innerText
    var price = shopItem.getElementsByClassName('novo-cijena')[0].innerText
    var quantity = shopItem.getElementsByClassName('novo-input')[0].value
    var imageSrc = shopItem.getElementsByClassName('novo-slike')[0].src    
    //console.log(title, price, imageSrc, quantity);
    addItemToCart(title, price, imageSrc, quantity)
    button.style.backgroundColor = "lightgrey";  //mijenja boju nakon klika
    button.disabled = true;   //nakon što je proizvod dodan, button se više ne može kliknuti
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc, quantity) {
    document.getElementById("myDiv");
    var cartRow = document.createElement('div')
    var cartItems = document.getElementsByClassName('novo-proizvodi')[0]
    document.getElementById("moja-kosarica").appendChild(cartRow)

     //kako se ne bi ponavljali isti elementi više puta
     var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
     for (var i = 0; i < cartItemNames.length; i++) {
         if (cartItemNames[i].innerText == title) {
             return 
         }
     }

    var cartRowContents = `
    <div class="all">
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">Cijena: <span style="font-weight: 700;">${price}</span></span>
        <div class="cart-quantity cart-column">
            <span class="cart-quantity-num">Količina: <span style="font-weight: 700;">${quantity}</span></span> 
            <button class="btn btn-danger"><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="8" cy="11" r="7.5" stroke="black"/>
            <path d="M7.875 9.97656L10.1562 6.54688H11.2656L8.39844 10.6953L11.3906 15H10.2891L7.88281 11.4219L5.47656 15H4.375L7.35938 10.6953L4.49219 6.54688H5.59375L7.875 9.97656Z" fill="black"/>
            </svg>
            
            </button>
        </div>
        </div>`

    cartRow.innerHTML = cartRowContents
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    total++;
}


/*********mijenjanje kolicine i zbrajanje cijene**********/

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('slike-proizvoda')[0]
    var cartRows = cartItemContainer.getElementsByClassName('novo-proizvodi')
    var arr = Array.from(cartRows);
    for (var i = 0; i < arr.length; i++) {
        var cartRow = arr[i]
        var priceEl=document.getElementsByClassName('novo-cijena')[i]
        var price = parseFloat(priceEl.innerText.replace('KN/kg', ''))
        var quantityEl=document.getElementsByClassName('novo-input')[i]
        var quantity = quantityEl.value;
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-num')[0]
        quantityElement = quantity;
        var endPrice = 0;
        endPrice = price*quantity;
        priceElement = endPrice;

        document.getElementsByClassName('cart-price')[i].innerText =  priceElement + ' KN/kg'
    }
        //za prikaz broja proizvoda u košari
        document.getElementsByClassName('broj-proizvoda-u-korpi')[0].innerText = total
}


/***************BRISANJE IZ KOŠARICE*************/

var removeCartItemButtons = document.getElementsByClassName('btn-danger')
for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
}

function enableButtons() {
    var addToCardButtons = document.getElementsByClassName("novo-buttons");
    for(var i=0; i<addToCardButtons.length; i++) {
    var button = addToCardButtons[i];
    button.disabled=false;
    }
}


function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.parentElement.remove();
    total--;
    document.getElementsByClassName('broj-proizvoda-u-korpi')[0].innerText = total;
    enableButtons();
    updateCartTotal();
    }



/************OTVARANJE KOŠARE**************/

var cartButton = document.getElementById("cart");
cartButton.addEventListener("click", showCart);

function showCart() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  
  $("#btnClicker").on("click", function() {
    $("#myDiv").append("<br />Stuff");
  });