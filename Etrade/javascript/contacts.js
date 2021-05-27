$(function () {
    let login = $('.login_name');
    let log = false;
    if (login[0] != undefined) {
        log = true;
    }
    if (log) {
        $('.list_con_cat').css('background-color','transparent');
        $.ajax({
            type: 'GET',
            url: 'get_con_cat.php',
            success: function (data) {
                if (data == "Connection_error") {
                   console.log('Connection error');
                    return false;
                }
                if (data == 'base connect error') {
                   console.log('base connect error');
                    return false;
                }
                let arr = JSON.parse(data);
                create_con(arr);
                $('.con_cat_item').on('click', function (){
                    $('.con').css('background-color','#0F2D4F');
                    let id_con_cat = $(this).attr('data-id');
                    $.ajax({
                        type: 'POST',
                        url: 'get_con.php',
                        data: {
                            id_con_cat: id_con_cat
                        },
                        success: function (data) {
                            if (data == "Connection_error") {
                               console.log('Connection error');
                                return false;
                            }
                            if (data == 'base connect error') {
                               console.log('base connect error');
                                return false;
                            }
                            let array = JSON.parse(data);
                            create_con_cat(array);
                        }
                    })
                });
                
            }
        });
        
    }

    function create_con(arr) {
        for (let i = 0; i < arr.length; i++) {
            console.log (arr[i]);
            let li = document.createElement('li');
            $(li).addClass('con_cat_item');
            $(li).html(arr[i]['name'].toUpperCase());
            $(li).attr('data-id', arr[i]['id']);
            $('.list_con_cat').append(li);
            }
        }
     function create_con_cat(array) {
        $('.list_con').html('');
        for (let i = 0; i < array.length; i++) {
            console.log (array[i]);
            let li = document.createElement('li');
            $(li).addClass('con_item');
            $(li).html(`
                <div class="text">${array[i]['user']}</div>
                <div class="text">${array[i]['number']}</div>`);
            $(li).attr('data-id', array[i]['id']);
            $('.list_con').append(li);
            }
        }

});
