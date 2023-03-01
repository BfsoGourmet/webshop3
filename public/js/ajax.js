var xhttp = new XMLHttpRequest();


function addToCart(sku) {
    $.ajax({url: "intoCart/"+sku, success: function(result){
        $("#CartTotal").html(result);
    }});
    // xhttp.open("GET", "intoCart/"+sku, true);
    // xhttp.send();
    // amountInCart = xhttp.response;
    // console.log(amountInCart);
}