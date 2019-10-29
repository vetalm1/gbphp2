

function getdetails(id, name, price, action, path){
    console.log('Run');
    $.ajax({
        type: "POST",
        url: path,
        data: {sendId:id, sendName:name, sendPrice:price, action:action}
    }).done(function( result )
        {
           $("#msg").html( name+ " - " + result );
           id_button = '#'+id;
           $(id_button).attr('style', 'display:none'); //'class', 'alert-dark'
           $('#summ').attr('style', 'display:none');
        });
    countBasket();
}

function  postid(id, path){
    $.ajax({
        type: "POST",
        url: path,
        data: {sendId:id}
    }).done(function( result ){
        console.log(result)
    });
    console.log(id)
}

// подсчет товаров в корзине
function countBasket(){
    $.ajax({
        type: "POST",
        url: 'm/M_Basket.php',
        data: {action:'countBasket'}
    }).done(function( result ){
        $("#basket-count").html( "(" + result + ")" );
        $('#basket-count').attr('style', 'color:red');
        console.log(result);
    }); 
}
countBasket();