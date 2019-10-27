
countGoodsSend=0;
function getdetails(countGoods, action, path){
    if (action == 'show') {
        countGoodsSend = 0;
    } 
    countGoodsSend+=countGoods;
    $.ajax({
        type: "POST",
        url: path,
        data: {sendCountGoods:countGoodsSend, action:action} 
        //,
        // если реализовывать через json
        // dataType: 'json',
        // contentType: 'application/json',
        // json: true
    }).done(function( result )
        {
           $("#msg").html(result);
           // JSON.parse(result); И далее реализация с помощтю JS
           // $('#msg').append(result) добавляем в конец списка дополнительный, 
           // предварительно нужно его(result) обработать, в html формат
        });

    if (countGoodsSend == 75) {
        document.querySelector('.plus' ).style.display = 'none';
    } else if (countGoodsSend == 0) {
        document.querySelector('.minus' ).style.display = 'none';
    } else {
        document.querySelector('.plus' ).style.display = 'block';
        document.querySelector('.minus' ).style.display = 'block';
    }
}

