$(document).ready(function(){

    if($(".selectpicker").length > 0)
        $(".selectpicker").selectpicker();

    $('#country_to').on('change', function () {
        var id = $(this).val();
        $.ajax({
            type:"GET",
            url: "/api/getCity/"+id,
            dataType: "json",
            // обработка успешного выполнения запроса
            success: function(data){
                $('#city_to').html('');
                $('#city_to').append('<option value="">Любой</option>');
                for(var city in data){

                    $('#city_to').append('<option value="'+data[city].id+'">'+data[city].name+'</option>');
                }
                $('.selectpicker').selectpicker('refresh');
            }
        });

    });

    $("#avia_search_form").validate({
            rules: {
                avia_from:{
                    required: true
                },
                avia_to:{
                    required: true
                },
                avia_date_from:{
                    required: true,
                    date: true
                }
            },
            messages: {
                avia_from: "Выберите место вылета",
                avia_to: "Выберите место куда полетите",
                avia_date_from: "Выберите дату",
                avia_date_to: "Выберите дату"

            }

        });

    $("#hotel_search_form").validate({
        rules: {
            hotel_city:{
                required: true
            },
            hotel_date_from:{
                required: true,
                date: true
            },
            hotel_date_to:{
                required: true,
                date: true
            }
        },
        messages: {
            hotel_city: "Выберите место прибывания",
            hotel_date_from: "Выберите дату",
            hotel_date_to: "Выберите дату"

        }

    });


        $('#avia_from').autocomplete({
            lookup: function (query, done) {
                $('#avia_from').attr('code', '');
                // организуем кроссдоменный запрос
                $.ajax({
                    type:"GET",
                    url: "http://places.aviasales.ru/",
                    dataType: "jsonp",
                    // параметры запроса, передаваемые на сервер (последний - подстрока для поиска):
                    data:{
                        locale: "ru",
                        term: query
                    },
                    // обработка успешного выполнения запроса
                    success: function(data){
                        // приведем полученные данные к необходимому формату и передадим в предоставленную функцию response
                        var countriesArray = $.map(data, function (suggestions) {
                            if(suggestions.airport_name == null){
                                return {value: suggestions.name , data: suggestions.iata};
                            }else{
                                return {value: suggestions.name + ' (' + suggestions.airport_name+')', data: suggestions.iata};
                            }

                        });
                        var counter = {};
                        counter['suggestions'] = countriesArray;
                        done(counter);
                    }
                });
            },
            minChars: 3,
            onSelect: function (suggestion) {
                //alert(suggestion.data);
                $(this).attr('code', suggestion.data);
            }
        });
        $('#avia_to').autocomplete({
            lookup: function (query, done) {
                // организуем кроссдоменный запрос
                $('#avia_to').attr('code', '');
                $.ajax({
                    type:"GET",
                    url: "http://places.aviasales.ru/",
                    dataType: "jsonp",
                    // параметры запроса, передаваемые на сервер (последний - подстрока для поиска):
                    data:{
                        locale: "ru",
                        term: query
                    },
                    // обработка успешного выполнения запроса
                    success: function(data){
                        // приведем полученные данные к необходимому формату и передадим в предоставленную функцию response
                        var countriesArray = $.map(data, function (suggestions) {
                            if(suggestions.airport_name == null){
                                return {value: suggestions.name , data: suggestions.iata};
                            }else{
                                return {value: suggestions.name + ' (' + suggestions.airport_name+')', data: suggestions.iata};
                            }


                        });
                        var counter = {};
                        counter['suggestions'] = countriesArray;
                        done(counter);
                    }
                });
            },
            minChars: 3,
            onSelect: function (suggestion) {
                $(this).attr('code', suggestion.data);
            }
        });
        $('#hotel_city').autocomplete({
            lookup: function (query, done) {
                $('#hotel_city').attr('code', '');
                // организуем кроссдоменный запрос
                $.ajax({
                    type:"GET",
                    url: "http://places.aviasales.ru/",
                    dataType: "jsonp",
                    // параметры запроса, передаваемые на сервер (последний - подстрока для поиска):
                    data:{
                        locale: "ru",
                        term: query
                    },
                    // обработка успешного выполнения запроса
                    success: function(data){
                        // приведем полученные данные к необходимому формату и передадим в предоставленную функцию response
                        var countriesArray = $.map(data, function (suggestions) {
                            if(suggestions.airport_name != null){

                            }else{
                                return {value: suggestions.name, data: suggestions.iata};
                            }

                        });
                        var counter = {};
                        counter['suggestions'] = countriesArray;
                        done(counter);
                    }
                });
            },
            minChars: 3,
            onSelect: function (suggestion) {
                $(this).attr('code', suggestion.data);
            }
        });
        /*$('#trip_from').autocomplete({
            lookup: countriesArray,
            minChars: 3,
            onSelect: function (suggestion) {
                $(this).attr('code', suggestion.data);
            }
        });
        $('#trip_to').autocomplete({
            lookup: countriesArray,
            minChars: 3,
            onSelect: function (suggestion) {
                $(this).attr('code', suggestion.data);
            }

        })*/



    if(Object.keys(localStorage).length != 0){
        $('#avia_from').attr('code',localStorage.code_from);
        $('#avia_to').attr('code',localStorage.code_to);
        $('#avia_from').val(localStorage.avia_from);
        $('#avia_to').val(localStorage.avia_to);


    }else{
        $('#avia_from').attr('code','');
        $('#avia_to').attr('code','');
        $('#avia_from').val('');
        $('#avia_to').val('');
        $("#avia_date_from").val('');
        var date = $('#avia_date_from').datepicker("enable").datepicker('getDate');
        $('#avia_date_to').datepicker("enable").datepicker("option", "minDate", date);
        $("#avia_date_to").val('');
    }

    if(typeof  localStorage.code_hotel_city != 'undefined'){
        $('#hotel_city').attr('code', localStorage.code_hotel_city);
        $('#hotel_city').val(localStorage.hotel_city);
        $('#hotel_people').val(localStorage.hotel_people);

    }else{
        $('#hotel_city').attr('code', '');
        $('#hotel_city').val('');
        $('#hotel_date_from').val('');
        $('#hotel_date_to').val('');
    }



    $('#avia_submit').click(function(){
        if($("#avia_search_form").valid()){
            if($('#avia_from').attr('code').length != 0 && $("#avia_date_to").val().length == 0 && $('#avia_to').attr('code').length != 0 && ($("#avia_adults").val() != 0 || $("#avia_children").val() != 0 || $("#avia_infants").val() != 0 )){
                var code_from = $('#avia_from').attr('code');
                var code_to = $('#avia_to').attr('code');
                var avia_adults = $("#avia_adults").val();
                var avia_children = $("#avia_children").val();
                var avia_infants = $("#avia_infants").val();
                var avia_date_from = $("#avia_date_from").val();
                var avia_trip_class = $('#trip_class').val();

                var sdate_from = avia_date_from.split('-');
                var sdate_day = sdate_from[2];
                var sdate_mountg =  sdate_from[1];

                localStorage.avia_from = $('#avia_from').val();
                localStorage.avia_to = $('#avia_to').val();
                localStorage.code_from = code_from;
                localStorage.code_to = code_to;
                localStorage.avia_adults = avia_adults;
                localStorage.avia_children = avia_children;
                localStorage.avia_infants = avia_infants;
                localStorage.avia_date_from = avia_date_from;
                localStorage.avia_trip_class= avia_trip_class;
                localStorage.avia_date_to ='';

                if(avia_trip_class == "Y"){
                  avia_trip_class = '';
                }else{
                  avia_trip_class = 'b';
                }

                var url = 'http://s.gofar.by/flights/'+code_from+sdate_day+sdate_mountg+code_to+avia_trip_class+avia_adults+avia_children+avia_infants;


                window.location.href = url;
            }else if($('#avia_from').attr('code').length != 0 && $('#avia_to').attr('code').length != 0 && ($("#avia_adults").val() != 0 || $("#avia_children").val() != 0 || $("#avia_infants").val() != 0 )){
                var code_from = $('#avia_from').attr('code');
                var code_to = $('#avia_to').attr('code');
                var avia_adults = $("#avia_adults").val();
                var avia_children = $("#avia_children").val();
                var avia_infants = $("#avia_infants").val();
                var avia_date_from = $("#avia_date_from").val();
                var avia_date_to = $("#avia_date_to").val();
                var avia_trip_class = $('#trip_class').val();

                var sdate_from = avia_date_from.split('-');
                var sdate_day = sdate_from[2];
                var sdate_mountg =  sdate_from[1];

                var sdate_to = avia_date_to.split('-');
                var sdate_day_to = sdate_to[2];
                var sdate_mountg_to =  sdate_to[1];

                localStorage.avia_from = $('#avia_from').val();
                localStorage.avia_to = $('#avia_to').val();
                localStorage.code_from = code_from;
                localStorage.code_to = code_to;
                localStorage.avia_adults = avia_adults;
                localStorage.avia_children = avia_children;
                localStorage.avia_infants = avia_infants;
                localStorage.avia_date_from = avia_date_from;
                localStorage.avia_date_to = avia_date_to;
                localStorage.avia_trip_class= avia_trip_class;

                if(avia_children == 0){
                  avia_children= '';
                }
                if(avia_infants == 0){
                  avia_infants == '';
                }
                if(avia_trip_class == "Y"){
                  avia_trip_class = '';
                }else{
                  avia_trip_class = 'b';
                }


                var url = 'http://s.gofar.by/flights/'+code_from+sdate_day+sdate_mountg+code_to+sdate_day_to+sdate_mountg_to+avia_trip_class+avia_adults+avia_children+avia_infants;

                window.location.href = url;
            }
        }
    });



    $('#hotel_submit').click(function() {
        if ($("#hotel_search_form").valid()) {
            if($('#hotel_city').attr('code').length != 0 && $('#hotel_date_from').val().length != 0 &&  $('#hotel_date_to').val().length != 0 ){
                var hotel_city = $('#hotel_city').attr('code');
                var hotel_date_from = $("#hotel_date_from").val();
                var hotel_date_to = $("#hotel_date_to").val();
                var hotel_people = $("#hotel_people").val();
                var hotel_city_name = $('#hotel_city').val();

                var sname = hotel_city_name.split(',');
                var h_name = sname[0];

                localStorage.code_hotel_city = $('#hotel_city').attr('code');
                localStorage.hotel_city = $('#hotel_city').val();
                localStorage.hotel_date_from = hotel_date_from;
                localStorage.hotel_date_to = hotel_date_to;
                localStorage.hotel_people = hotel_people;
                var url = 'http://s.gofar.by/hotels?destination='+h_name+'&iata='+hotel_city+'&checkIn='+hotel_date_from+'&checkOut='+hotel_date_to+'&room_type='+hotel_people;
                window.location.href = url;
            }
        }

    });

    $('#hotel-link').click(function(){
        jQuery.scrollTo('#container', 800);
        $('#container').tabs({
            active: 1
        });
    });
    $('#hotel-link-top').click(function(){
        jQuery.scrollTo('#container', 800);
        $('#container').tabs({
            active: 1
        });
    });

    $('#avia-link').click(function(){
        jQuery.scrollTo('#container', 800);
        $('#container').tabs({
            active: 0
        });
    });

    var cities = {};

    var ddd = new Date();

    var mom1 = moment(ddd).add(7, 'd').format('YYYY-MM-DD');
    var mom2 = moment(ddd).add(14, 'd').format('YYYY-MM-DD');

    cities[0] = {};
    cities[0].name = 'Барселона';
    cities[0].country = 'Испания';
    cities[0].photo = 'citi/barselona.jpg';
    cities[0].url = 'http://s.gofar.by/hotels?destination=Барселона&iata=BCN&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[0].code = 'BCN';
    cities[0].count = 4036;

    cities[1] = {};
    cities[1].name = 'Дубай';
    cities[1].country = 'ОАЭ';
    cities[1].photo = 'citi/dubai.jpg';
    cities[1].url = 'http://s.gofar.by/hotels?destination=Дубай&iata=DXB&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[1].code = 'DXB';
    cities[1].count = 1147;

    cities[2] = {};
    cities[2].name = 'Лондон';
    cities[2].country = 'Великобритания';
    cities[2].photo = 'citi/london.jpg';
    cities[2].url = 'http://s.gofar.by/hotels?destination=Лондон&iata=LON&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[2].code = 'LON';
    cities[2].count = 2745;

    cities[3] = {};
    cities[3].name = 'Гонконг';
    cities[3].country = 'Гонконг';
    cities[3].photo = 'citi/hong-kong.jpg';
    cities[3].url = 'http://s.gofar.by/hotels?destination=Гонконг&iata=HKG&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[3].code = 'HKG';
    cities[3].count = 2745;

    cities[4] = {};
    cities[4].name = 'Париж';
    cities[4].country = 'Франция';
    cities[4].photo = 'citi/paris.jpg';
    cities[4].url = 'http://s.gofar.by/hotels?destination=Париж&iata=PAR&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[4].code = 'PAR';
    cities[4].count = 5849;

    cities[5] = {};
    cities[5].name = 'Прага';
    cities[5].country = 'Чехия';
    cities[5].photo = 'citi/Prague.jpg';
    cities[5].url = 'http://s.gofar.by/hotels?destination=Прага&iata=PRG&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[5].code = 'PRG';
    cities[5].count = 2449;

    cities[6] = {};
    cities[6].name = 'Рим';
    cities[6].country = 'Италия';
    cities[6].photo = 'citi/rim.jpg';
    cities[6].url = 'http://s.gofar.by/hotels?destination=Рим&iata=ROM&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[6].code = 'ROM';
    cities[6].count = 9058;

    cities[7] = {};
    cities[7].name = 'Стамбул';
    cities[7].country = 'Турция';
    cities[7].photo = 'citi/stambul.jpg';
    cities[7].url = 'http://s.gofar.by/hotels?destination=Стамбул&iata=IST&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[7].code = 'IST';
    cities[7].count = 3618;

    cities[8] = {};
    cities[8].name = 'Венеция';
    cities[8].country = 'Италия';
    cities[8].photo = 'citi/venice.jpg';
    cities[8].url = 'http://s.gofar.by/hotels?destination=Венеция&iata=VCE&checkIn='+mom1+'&checkOut='+mom2+'&room_type=2';
    cities[8].code = 'VCE';
    cities[8].count = 1687;

    for(var cit in cities){
        $('.awe-masonry').append('<div class="awe-masonry__item" code="'+cities[cit].code+'" nam="'+cities[cit].name+', '+cities[cit].country+'" url="'+cities[cit].url+'"> <a href="'+cities[cit].url+'" code="'+cities[cit].code+'" nam="'+cities[cit].name+', '+cities[cit].country+'"> <div class="image-wrap image-cover" code="'+cities[cit].code+'" nam="'+cities[cit].name+', '+cities[cit].country+'"> <img src="'+cities[cit].photo+'" alt="" code="'+cities[cit].code+'" nam="'+cities[cit].name+', '+cities[cit].country+'"></div> </a> <div class="item-title"> <h2> <a href="'+cities[cit].url+'" code="'+cities[cit].code+'" nam="'+cities[cit].name+', '+cities[cit].country+'">'+cities[cit].name+'</a> </h2> <div class="item-cat"> <ul> <li> <a href="'+cities[cit].url+'">'+cities[cit].country+'</a> </li> </ul> </div> </div> <div class="item-available"> <span class="count">'+cities[cit].count+'</span>отелей </div> </div>');
    }

    function str_split(string, split_length) {

        if (split_length === null) {
            split_length = 1;
        }
        if (string === null || split_length < 1) {
            return false;
        }
        string += '';
        var chunks = [],
            pos = 0,
            len = string.length;
        while (pos < len) {
            chunks.push(string.slice(pos, pos += split_length));
        }

        return chunks;
    }

    var url = location.href;
    var split1= url.split('#');

    if(split1[1] == 'hotels'){
        jQuery.scrollTo('#container', 800);
        $('#container').tabs({
            active: 1
        });
    }else if(split1[1] == 'avias'){
        jQuery.scrollTo('#container', 800);
        $('#container').tabs({
            active: 0
        });
    }

});
