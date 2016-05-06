$(document).ready(function(){
    function parseGET() {
        // Обработка GET-запросов
        var tmp = new Array();    // два вспомогательных
        var tmp2 = new Array();  // массива
        get = new Array();

        var url = location.search;	// строка GET запроса
        if(url != '') {
            tmp = (url.substr(1)).split('&');	// разделяем переменные
            for(var i=0; i < tmp.length; i++) {
                tmp2 = tmp[i].split('=');		// массив param будет содержать
                get[tmp2[0]] = tmp2[1];		// пары ключ(имя переменной)->значение
            }
        }
    }
    var CSRF_TOKEN = $('input[name="_token"]').attr('value');
    moment.locale('ru', {
        months : [
            "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль",
            "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
        ],
        monthsShort : [
            "января", "февраля", "марта", "апрель", "мая", "июня",
            "июля", "августа", "сентября", "октября", "ноября", "декабря"
        ]

    });
    var search_row = window.location.search;
    if(search_row.length>2){

        parseGET(search_row);
        var country_to = get['country_to'];
        var transport = get['transport'];
        var city_to = get['city_to'];
        var category = get['category'];
        var date = get['date'];
        var price = get['price'];
        var city_from = get['city_from'];
        var orderBy = get['orderBy'];
        var orderType = get['orderType'];
        var offSet = get['offset'];

        loadDate(country_to,transport,city_to,category,date,price,city_from,orderBy,orderType,offSet);

    }


    function view(data){
        $('.filter-item-wrapper').html('');
        for(var trip in data){
            var trip_date_id = moment(data[trip].trip_date).format('DD MMM YYYY');
            if(data[trip].premium == 1){
                var premium = 'id="active"';
            }else{
                var premium = '';
            }
            if(trip.hot == 1){
                var hot_view = '<div style="background: #bf1c00;color: #fff;height: 20px;width: 100px;text-align: center;float: left;">Горящий тур</div> <span style="padding-left: 20px;color:#333">'+data[trip].category_name+'</span> <span style="padding-left: 20px;color:#333">'+data[trip].transport_name+' <b>'+trip_date_id+'</b></span>';
            }else{
                var hot_view = '<span style="color:#333">'+data[trip].category_name+'</span > <span style="padding-left: 20px;color:#333">'+data[trip].transport_name+'  <b>'+trip_date_id+'</b></span>';
            }

            data[trip].price = accounting.formatMoney(data[trip].price, "руб.", 0, " ", ",", "%v %s");


            $('.filter-item-wrapper').append(' <div class="trip-item" '+premium+'> <div class="item-body" style="width: 75%"> <div class="item-title"><h2><a href="/trip/'+data[trip].trip_id+'">'+data[trip].name_trip+'</a></h2>'+hot_view+' <span style="padding-left: 20px;color:#333"><a href="/trip/'+data[trip].trip_id+'">'+data[trip].name+'</a></span> </div> <hr> <div class="item-list">'+data[trip].short_about_trip+'</div> <div class="item-footer" style="margin-top: -0px;"> <hr> <div class="item-rate"> <img src="http://traveling.by/files/operator/2015/09/4880e7f1d9edd236258af2872cc72d13-thumb-210x85.png" style="height: 70px;"></div> <div class="item-icons">Все цены на туры в Египет на нашем сайте <a href="javascript:void 0">'+data[trip].name+'</a> </div> </div> </div> <div class="item-price-more" style="width: 23%;"> <div class="price">'+data[trip].phone1+'<br>'+data[trip].phone2+'<br>'+data[trip].phone3+'<br>'+data[trip].phone4+'<br> <ins><span class="amount">'+data[trip].price+'</span></ins> </div> <a href="/trip/'+data[trip].trip_id+'" class="awe-btn">Заказать</a></div> </div>');
        }
        if(data.length == 0){
            $('.filter-item-wrapper').append('По вашему запросу ничего не найдено');
        }
    }

    $('#sort_price').click(function(){
        parseGET(window.location.search);
        var country_to = get['country_to'];
        var transport = get['transport'];
        var city_to = get['city_to'];
        var category = get['category'];
        var date = get['date'];
        var price = get['price'];
        var city_from = get['city_from'];
        var offSet = get['offset'];
        if($('#sort_price_li').attr('class') == 'fa fa-angle-up'){
            get['orderBy']='price';
            get['orderType'] = 'asc';
            var orderBy = get['orderBy'];
            var orderType = get['orderType'];
            get['offset'] = 0;
            var url = '/search/trip?country_to='+get['country_to']+'&transport='+get['transport']+'&city_to='+get['city_to']+'&category='+get['category']+'&date='+get['date']+'&price='+get['price']+'&city_from='+get['city_from']+'&orderBy='+get['orderBy']+'&orderType='+get['orderType']+'&offset=0';
            window.history.pushState(null, null, url);
            loadDate(country_to,transport,city_to,category,date,price,city_from,orderBy,orderType,offSet);
            $(this).addClass('active');
            $('#sort_date').removeClass('active');
            $('#sort_price_li').attr('class','fa fa-angle-down');
        }else{
            get['orderBy']='price';
            get['orderType'] = 'desc';
            var orderBy = get['orderBy'];
            var orderType = get['orderType'];
            get['offset'] = 0;
            $(this).addClass('active');
            $('#sort_date').removeClass('active');
            var url = '/search/trip?country_to='+get['country_to']+'&transport='+get['transport']+'&city_to='+get['city_to']+'&category='+get['category']+'&date='+get['date']+'&price='+get['price']+'&city_from='+get['city_from']+'&orderBy='+get['orderBy']+'&orderType='+get['orderType']+'&offset=0';
            window.history.pushState(null, null, url);
            loadDate(country_to,transport,city_to,category,date,price,city_from,orderBy,orderType,offSet);
            $('#sort_price_li').attr('class','fa fa-angle-up');
        }

    });

    $('#sort_date').click(function(){
        parseGET(window.location.search);
        var country_to = get['country_to'];
        var transport = get['transport'];
        var city_to = get['city_to'];
        var category = get['category'];
        var date = get['date'];
        var price = get['price'];
        var city_from = get['city_from'];
        var offSet = get['offset'];

        if($('#sort_date_li').attr('class') == 'fa fa-angle-up'){
            get['orderBy']='update_at';
            get['orderType'] = 'asc';
            var orderBy = get['orderBy'];
            var orderType = get['orderType'];
            get['offset'] = 0;
            var url = '/search/trip?country_to='+get['country_to']+'&transport='+get['transport']+'&city_to='+get['city_to']+'&category='+get['category']+'&date='+get['date']+'&price='+get['price']+'&city_from='+get['city_from']+'&orderBy='+get['orderBy']+'&orderType='+get['orderType']+'&offset=0';
            window.history.pushState(null, null, url);
            $(this).addClass('active');
            $('#sort_price').removeClass('active');
            loadDate(country_to,transport,city_to,category,date,price,city_from,orderBy,orderType,offSet);
            $('#sort_date_li').attr('class','fa fa-angle-down');
        }else{
            get['orderBy']='update_at';
            get['orderType'] = 'desc';
            var orderBy = get['orderBy'];
            var orderType = get['orderType'];
            get['offset'] = 0;
            var url = '/search/trip?country_to='+get['country_to']+'&transport='+get['transport']+'&city_to='+get['city_to']+'&category='+get['category']+'&date='+get['date']+'&price='+get['price']+'&city_from='+get['city_from']+'&orderBy='+get['orderBy']+'&orderType='+get['orderType']+'&offset=0';
            window.history.pushState(null, null, url);
            $(this).addClass('active');
            $('#sort_price').removeClass('active');
            loadDate(country_to,transport,city_to,category,date,price,city_from,orderBy,orderType,offSet);
            $('#sort_date_li').attr('class','fa fa-angle-up');
        }

    });
















    function loadDate(country_to,transport,city_to,category,date,price,city_from,orderBy,orderType,offSet){
        $.ajax({
            type:"POST",
            url: "/api/search_trip",
            dataType: "json",
            // параметры запроса, передаваемые на сервер (последний - подстрока для поиска):
            data:{
                _token: CSRF_TOKEN,
                country_to: country_to,
                transport: transport,
                city_to: city_to,
                category: category,
                date: date,
                price: price,
                city_from: city_from,
                orderBy: orderBy,
                orderType: orderType,
                offset: offSet
            },
            // обработка успешного выполнения запроса
            success: function(data){
                view(data);

            }
        });
    }
});