var xhttp = new XMLHttpRequest();


function addToCart(sku) {
    $.ajax({url: "/intoCart/"+sku, success: function(result){
        $("#CartTotal").html(result);
    }});
}

function removeFromCart(sku) {
    $.ajax({url: "/outOfCart/"+sku, success: function(result){
        location.reload();        
    }});
}

