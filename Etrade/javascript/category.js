$(function () {
    let login = $('.login_name');
    let log = false;
    if (login[0] != undefined) {
        log = true;
    }
    if (log) {
        $.ajax({
            type: 'GET',
            url: 'get_cat.php',
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
                create_cat_list(arr);
                $('.cat_item').on('click', function () {
                    $('.cat_obj').css('background-color','transparent');
                    $('.cat').css('border-right','transparent');
                    $('.cat_obj').html('');
                    let id_cat = $(this).attr('data-id');
                    $.ajax({
                        type: 'GET',
                        url: 'get_pod_cat.php',
                        data: {
                            id_cat: id_cat
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
                            let arr1 = JSON.parse(data);
                            create_pod_cat_list(arr1);
                            if(arr1.length==0){
                                $('.cat_obj').html('');
                            }
                            $('.pod_cat_item').on('click', function () {
                                $('.cat').css('border-right','1px solid #F8A918');
                                let id_pod_cat = $(this).attr('data-id');
                               console.log(this);
                                $.ajax({
                                    type: 'POST',
                                    url: 'get_obj.php',
                                    data: {
                                        id_pod_cat: id_pod_cat
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
                                        create_obj_list(array);
                                    }
                                })
                            });
                        }
                    })
                });

            },
        })

    }

    function create_cat_list(arr) {
        for (let i = 0; i < arr.length; i++) {
            let li = document.createElement('li');
            $(li).addClass('cat_item');
            $(li).html(arr[i]['name'].toUpperCase());
            $(li).attr('data-id', arr[i]['id']);
            $('.list_cat').append(li);
        }
    }
    function create_pod_cat_list(arr1) {
        console.log(arr1);
        $('.list_pod_cat').html('');
        for (let i = 0; i < arr1.length; i++) {
            let li = document.createElement('li');
            $(li).addClass('pod_cat_item');
            $(li).html(arr1[i]['name'].toUpperCase());
            $(li).attr('data-id', arr1[i]['id']);
            $('.list_pod_cat').append(li);
        }
    }


    function create_obj_list(array) {
        $('.list').html('');
        let ul = document.createElement('ul');
        $(ul).addClass('cat_obj');
        $(ul).html(`
                <li><div class="icon"><img src="../logos/team.png" alt="" ></div><div class="text">${array['teamviwer']}</div></li>
                <li><div class="icon"><p>Password</p></div><div class="text">${array['parol1']}</div></li>
                <li><div class="icon"><img src="../logos/Any.png" alt="" ></div><div class="text">${array['anydesk']}</div></li>
                <li><div class="icon"><p>Password</p></div><div class="text">${array['parol2']}</div></li>
                <li><div class="icon"><img src="../logos/rdp.png" alt="" ></div><div class="text">${array['rpd']}</div></li>
                <li><div class="icon"><p>Rdp_IP</p></div><div class="text">${array['ip']}</div></li>
                <li><div class="icon"><p>Rdp_login</p></div><div class="text">${array['login']}</div></li>
                <li><div class="icon"><p>Rdp_Parol</p></div><div class="text">${array['password']}</div></li>   
            `);
        $('.list').append(ul);
    }

});
