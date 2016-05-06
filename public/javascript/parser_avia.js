$(document).ready(function(){
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

    function parse_time(time){
        var h = time / 60 ^ 0;
        if (h) {
            var m = time % 60;
            if (m < 10) m = '0' + m;
            time = h + ' ч ' + m + ' м';
        } else {
            time = time + ' м';
        }
        return time;

    }

    var t=0;

    var url = location.href;

    var big_data = {};
    var ticket ={};
    var status = 0;
	var cure;
    var split1= url.split('/avia/');

    var url = split1[0].split('//');
    var url = url[1];

    var splite = split1[1].split('/');
    var str = str_split(splite,1);
    var name_dist_from = '';
    var name_dist_to = '';
    if(str.length <29){
        var dist_from = str[0]+str[1]+str[2];
        var dist_to = str[13]+str[14]+str[15];
        var date_from = str[3]+str[4]+str[5]+str[6]+str[7]+str[8]+str[9]+str[10]+str[11]+str[12];
        var adults =  str[16];
        var children =  str[17];
        var infants =  str[18];
        var trip_class =  str[19];
        var url_for_parse = 'http://'+url+'/avia/search';
        var url= 'http://'+url+'/avia/'+dist_from+'-'+dist_to+'/'+date_from+'/'+adults+'-'+children+'-'+infants+'/'+trip_class;
        var CSRF_TOKEN = $('input[name="_token"]').attr('value');
    }else{
        var dist_from = str[0]+str[1]+str[2];
        var dist_to = str[13]+str[14]+str[15];
        var date_from = str[3]+str[4]+str[5]+str[6]+str[7]+str[8]+str[9]+str[10]+str[11]+str[12];
        var date_to = str[16]+str[17]+str[18]+str[19]+str[20]+str[21]+str[22]+str[23]+str[24]+str[25];
        var adults =  str[26];
        var children =  str[27];
        var infants =  str[28];
        var trip_class =  str[29];
        var url_for_parse = 'http://'+url+'/avia/search';
        var url= 'http://'+url+'/avia/'+dist_from+'-'+dist_to+'/'+date_from+'/'+date_to+'/'+adults+'-'+children+'-'+infants+'/'+trip_class;
        var CSRF_TOKEN = $('input[name="_token"]').attr('value');
    }

    $.ajax({
        type:"GET",
        url: "http://places.aviasales.ru/",
        dataType: "jsonp",
        data:{
            locale: "ru",
            term: dist_from
        },
        success: function(data){
            
            name_dist_from = data[0].name;
            name_dist_from = name_dist_from.split(',');
            name_dist_from = name_dist_from[0];
            return name_dist_from;
        }
    });
    $.ajax({
        type:"GET",
        url: "http://places.aviasales.ru/",
        dataType: "jsonp",
        data:{
            locale: "ru",
            term: dist_to
        },
        
        success: function(data){
           
            name_dist_to = data[0].name;
            name_dist_to = name_dist_to.split(',');
            name_dist_to = name_dist_to[0];
            return name_dist_to;
        }
    });


    var progressbar = $( "#progressbar" ),
        progressLabel = $( ".progress-label" );

    progressbar.progressbar({
        value: false,
        change: function() {
            progressLabel.text( progressbar.progressbar( "value" ) + "%" );
        },
        complete: function() {           
        }
    });

    var url_uuid = url+'/uuid';
	var currency_rate = {};

    $.ajax({
        type: "POST",
        url: url_uuid,
        data:{_token: CSRF_TOKEN},
        success: function(data){
            currency_rate = data.currency_rates;
            search_url = url_for_parse+'/'+data.search_id;
            search(search_url);
        }
    });
    var t = 0;
    var v = 0;
    var k = 0;
    function parser(url,data){
        if(typeof data[0] == 'undefined' || (typeof data[0].proposals == 'undefined' && typeof data[0].gates_info == 'undefined') ){
            $( "#progressbar").css({'display':'none'});
            status = 1;
        }else{
            data_parser(data);
            if(k > 1){
                sort('min_price',data);
                rerender();
                view(ticket, 0, 10);
            }
            search(url);
            k++;
        }
    }

var n =0;
var p = 10000;

var v = 0;
var e= {};
var check = 0;
var gas = 0;
function data_parser(data){
    for(var key in data){
        if(typeof data[key] != 'undefined' && data[key].filters_boundary != 'undefined' && typeof data[key].proposals  != 'undefined' && data[key].proposals.length != 0 && typeof data[key] != 'undefined' && typeof data != 'undefined' && typeof data[key].gates_info[666] == 'undefined') {
                    for (var pr in data[key].proposals) {
                        if (typeof ticket[0] == 'undefined') {

                            ticket[v] = {};
                            ticket[v].sign = data[key].proposals[pr].sign;
                            ticket[v].proposals = {};
                            ticket[v].proposals = data[key].proposals[pr];
                            ticket[v].gates_info = {};
                            ticket[v].gates_info[0] = data[key].gates_info;
                            ticket[v].price = {};
                            ticket[v].url = {};
                            ticket[v].view = 0;
                            ticket[v].search_id =data[key].search_id;
                            ticket[v].min_price = {};
                            ticket[v].airports = data[key].airports;

                            for (var tr in data[key].proposals[pr].terms) {

                                ticket[v].price[tr] = data[key].proposals[pr].terms[tr].unified_price;
                                ticket[v].min_price[tr] = data[key].proposals[pr].terms[tr].unified_price;
                                ticket[v].url[tr] = data[key].proposals[pr].terms[tr].url;
                            }
                        } else {
                            check = 0;
                            for (var l in ticket) {
                                if (ticket[l].sign == data[key].proposals[pr].sign) {
                                    var gil = Object.keys(ticket[l].gates_info).length;
                                    ticket[l].gates_info[gil] = data[key].gates_info;

                                    for (var tr in data[key].proposals[pr].terms) {
                                        ticket[l].price[tr] = data[key].proposals[pr].terms[tr].unified_price;
                                        for (var m in ticket[l].min_price) {
                                            for (var p in ticket[l].price) {
                                                if (ticket[l].min_price[m] > ticket[l].price[p] && ticket[l].price[p] != null) {
                                                    delete (ticket[l].min_price[m]);
                                                    ticket[l].min_price[p] = ticket[l].price[p];
                                                }
                                            }
                                        }
                                        ticket[l].url[tr] = data[key].proposals[pr].terms[tr].url;
                                    }
                                    check = 1;
                                    break;
                                }
                            }

                            if (check == 0) {
                                v++;
                                ticket[v] = {};
                                ticket[v].sign = data[key].proposals[pr].sign;
                                ticket[v].proposals = {};
                                ticket[v].proposals = data[key].proposals[pr];
                                ticket[v].gates_info = {};
                                ticket[v].gates_info[0] = data[key].gates_info;
                                ticket[v].price = {};
                                ticket[v].url = {};
                                ticket[v].view = 0;
                                ticket[v].search_id =data[key].search_id;
                                ticket[v].min_price = {};
                                ticket[v].airports = data[key].airports;
                                for (var tr in data[key].proposals[pr].terms) {
                                    ticket[v].price[tr] = data[key].proposals[pr].terms[tr].unified_price;
                                    ticket[v].min_price[tr] = data[key].proposals[pr].terms[tr].unified_price;
                                    ticket[v].url[tr] = data[key].proposals[pr].terms[tr].url;
                                }
                            }
                        }

                    }


            }

        }

    }



    function sort(type_sort, data){

        switch (type_sort){
            case 'min_price':
                do {
                    swapped = false;
                for(var sorter in ticket){
                    var vis = 0;
                    var swapped;
                    var sr = parseInt(sorter,10) + 1;
                            for (var yr in ticket[sorter].min_price) {

                                if (typeof ticket[sr] != 'undefined') {
                                    for (var ser in ticket[sr].min_price) {

                                        if (parseInt(ticket[sorter].min_price[yr], 10) > parseInt(ticket[sr].min_price[ser], 10)) {
                                            var temp = ticket[sorter];
                                            ticket[sorter] = ticket[sr];
                                            ticket[sr] = temp;

                                            swapped = true;
                                        }
                                    }

                                }
                            }
					}

                }while (swapped);


            break;
        };
    }

var departure_to = new Array(); // Место отпврелние
var arrival_to = new Array();  // Место прибытия
var departure_date_to = new Array();   // Дата отправления
var departure_time_to = new Array(); // Время отправления
var arrival_date_to = new Array();  //Дата прибытия
var arrival_time_to = new Array();  //Время прибытия
var duration_to = new Array(); // Время перелёта
var delay_to = new Array();

var departure_from = new Array(); // Место отпврелние
var arrival_from = new Array();  // Место прибытия
var departure_date_from = new Array();   // Дата отправления
var departure_time_from = new Array(); // Время отправления
var arrival_date_from = new Array();  //Дата прибытия
var arrival_time_from = new Array();  //Время прибытия
var duration_from = new Array(); // Время перелёта
var delay_from = new Array();

var duration_tos = 0;
var duration_froms = 0;
var min_pr;
var count_open_info = 0;
var eeee=0;
var cur0;
var search_id;
var trt = 0;
var curese;
var main_gate;
    moment.locale('ru', {
        months : [
            "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль",
            "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
        ],
        monthsShort : [
            "янв", "фев", "мар", "апр", "май", "июн",
            "июл", "авг", "сен", "окт", "ноя", "дек"
        ]

    });
    var delay_name ='';
    var dist_name = '';
    var name_dist_tos = '';
    function view(data, start, end){
            for (var rrr = start; rrr<end;rrr++) {
                if (typeof data[rrr] != 'undefined') {


                    var validating_carrier = data[rrr].proposals.validating_carrier;
                    for (var mmin in  data[rrr].min_price) {
                        min_pr = data[rrr].min_price[mmin];
                        cur0 = data[rrr].min_price[mmin];
                        url = data[rrr].url[mmin];
                        for(var ggr in data[rrr].gates_info){
                            for(var gate_id in data[rrr].gates_info[ggr] ){
                                if(gate_id== mmin){
                                    main_gate = data[rrr].gates_info[ggr][gate_id].label;
                                }
                            }
                        }

                    }
                    search_id = data[rrr].search_id;
                    var gf = 0;
                    var gt = 0;

                    var more_info = '';
                    more_info +='<div class="container2" id="cont'+eeee+'" style="display: none;margin-top: 200px;"><div class="row" style="margin-left: 200px;"><div class="item-title"> <h4> <a href="#" type="button" >' + name_dist_from+' - '+name_dist_to+ '</a> </h4> </div></div>';

                 
                    for (var g = 0; g < Object.keys(data[rrr].proposals.segment[0].flight).length; g++) {
                        delay_name = '';
                        departure_to[gf] = data[rrr].proposals.segment[0].flight[g].departure;
                        arrival_to[gf] = data[rrr].proposals.segment[0].flight[g].arrival;
                        departure_date_to[gf] = moment(data[rrr].proposals.segment[0].flight[g].departure_date).format('DD MMM YYYY');
                        departure_time_to[gf] = data[rrr].proposals.segment[0].flight[g].departure_time;
                        arrival_date_to[gf] =  moment(data[rrr].proposals.segment[0].flight[g].arrival_date).format('DD MMM YYYY');
                        arrival_time_to[gf] = data[rrr].proposals.segment[0].flight[g].arrival_time;
                        duration_to[gf] = data[rrr].proposals.segment[0].flight[g].duration;
                        delay_to[gf] = data[rrr].proposals.segment[0].flight[g].delay;


                        more_info +='<div class="item-body" style="width:650px;margin-left:170px;"> <table class="item-table"> <thead> <tr><th class="route">Путь</th> <th class="depart">Вылет</th> <th class="arrive">Прибытие</th> <th class="duration">Длительнсоть</th> <th class="duration">Перевозчик</th>  </tr> </thead><tbody><tr>';
                        more_info += '<td class="route"><ul><li>'+data[rrr].proposals.segment[0].flight[g].departure+'<i class="awe-icon awe-icon-arrow-right"></i></li><li>'+data[rrr].proposals.segment[0].flight[g].arrival+'<i class="awe-icon awe-icon-arrow-right"></i></li></ul>';
                        more_info += '<td class="depart"> <span>'+data[rrr].proposals.segment[0].flight[g].departure_time+'</span><span class="date" data-locale="ru">'+moment(data[rrr].proposals.segment[0].flight[g].departure_date).format('DD MMM YYYY');+'</span></td>';
                        more_info += '<td class="arrive"><span>'+data[rrr].proposals.segment[0].flight[g].arrival_time+'</span><span class="date" data-locale="ru">'+moment(data[rrr].proposals.segment[0].flight[g].arrival_date).format('DD MMM YYYY')+'</span></td>';
                        more_info += '<td class="duration"><span>'+parse_time(data[rrr].proposals.segment[0].flight[g].duration)+'</span> </td>';

                        if(typeof data[rrr].proposals.segment[0].flight[g].aircraft != 'undefined'){
                            more_info += '<td class="duration"><span>'+data[rrr].proposals.segment[0].flight[g].aircraft+'</span> <img src="http://pics.avs.io/al_square/65/65/' + data[rrr].proposals.segment[0].flight[g].operating_carrier + '.png"></td>';
                        }else{
                            more_info += '<td class="duration"><span></span> <img src="http://pics.avs.io/al_square/65/65/' + data[rrr].proposals.segment[0].flight[g].operating_carrier + '.png"></td>';
                        }

                        more_info += '</tbody></table></div>';
                        gf++;

                        if(Object.keys(data[rrr].proposals.segment[0].flight).length > 1 && gf<Object.keys(data[rrr].proposals.segment[0].flight).length){
                            for(var fdf in data[rrr].airports){
                                if(fdf == data[rrr].proposals.segment[0].flight[g].arrival){
                                    delay_name = data[rrr].airports[fdf].cases.pr;
                                    if(delay_name == 'о Киеве'){
                                        delay_name = delay_name.split('о ');
                                        delay_name = delay_name[1];
                                    }
                                }
                            }
                            more_info += '<div style="background: #f4f4f4;margin-left: 190px;height:30px;float:left;width:350px;"><div class="expl-flight-stop-icon  expl-flight-wait-icon" style="margin-left:10px;margin-top:5px;"><i class="fa fa-clock-o"></i></div><div class="expl-flight-layover-airport"  style="margin-top:5px;">Пересадка в '+delay_name+'</div><div class="expl-flight-duration"  style="margin-top:5px;">'+parse_time(data[rrr].proposals.segment[0].flight[g+1].delay)+' </div></div>';


                        }



                    }
                    if(typeof data[rrr].proposals.segment[1] == 'undefined') {
                        more_info += '</div>';
                    }
                    if(typeof data[rrr].proposals.segment[1] != 'undefined'){
                        more_info +='<div class="row" style="margin-left: 200px;"><div class="item-title" style="float:left"> <h4> <a href="#">' + name_dist_to+' - '+name_dist_from+ '</a> </h4> </div></div>';

                        for (var g = 0; g < Object.keys(data[rrr].proposals.segment[1].flight).length; g++) {
                            delay_name = '';
                            departure_from[gt] = data[rrr].proposals.segment[1].flight[g].departure;
                        arrival_from[gt] = data[rrr].proposals.segment[1].flight[g].arrival;
                        departure_date_from[gt] =  moment(data[rrr].proposals.segment[1].flight[g].departure_date).format('DD MMM YYYY');
                        departure_time_from[gt] = data[rrr].proposals.segment[1].flight[g].departure_time;
                        arrival_date_from[gt] =  moment(data[rrr].proposals.segment[1].flight[g].arrival_date).format('DD MMM YYYY');
                        arrival_time_from[gt] = data[rrr].proposals.segment[1].flight[g].arrival_time;
                        duration_from[gt] = data[rrr].proposals.segment[1].flight[g].duration;
                        delay_from[gt] = data[rrr].proposals.segment[1].flight[g].delay;

                        more_info +='<div class="item-body" style="width:650px;margin-left:170px;"> <table class="item-table"> <thead> <tr><th class="route">Путь</th> <th class="depart">Вылет</th> <th class="arrive">Прибытие</th> <th class="duration">Длительнсоть</th> <th class="duration">Перевозчик</th>  </tr> </thead><tbody><tr>';
                        more_info += '<td class="route"><ul><li>'+data[rrr].proposals.segment[1].flight[g].departure+'<i class="awe-icon awe-icon-arrow-right"></i></li><li>'+data[rrr].proposals.segment[1].flight[g].arrival+'<i class="awe-icon awe-icon-arrow-right"></i></li></ul>';
                        more_info += '<td class="depart"> <span>'+data[rrr].proposals.segment[1].flight[g].departure_time+'</span><span class="date" data-locale="ru">'+moment(data[rrr].proposals.segment[1].flight[g].departure_date).format('DD MMM YYYY');+'</span></td>';
                        more_info += '<td class="arrive"><span>'+data[rrr].proposals.segment[1].flight[g].arrival_time+'</span><span class="date" data-locale="ru">'+moment(data[rrr].proposals.segment[1].flight[g].arrival_date).format('DD MMM YYYY')+'</span></td>';
                        more_info += '<td class="duration"><span>'+parse_time(data[rrr].proposals.segment[1].flight[g].duration)+'</span> </td>';
                            if(typeof data[rrr].proposals.segment[1].flight[g].aircraft != 'undefined'){
                                more_info += '<td class="duration"><span>'+data[rrr].proposals.segment[1].flight[g].aircraft+'</span> <img src="http://pics.avs.io/al_square/65/65/' + data[rrr].proposals.segment[1].flight[g].operating_carrier + '.png"></td>';
                            }else{
                                more_info += '<td class="duration"><span></span> <img src="http://pics.avs.io/al_square/65/65/' + data[rrr].proposals.segment[1].flight[g].operating_carrier + '.png"></td>';
                            }
                            more_info += '</tbody></table></div>';
                        gt++;

                        if(Object.keys(data[rrr].proposals.segment[1].flight).length > 1 && gt<Object.keys(data[rrr].proposals.segment[1].flight).length){

                            for(var fdf in data[rrr].airports){
                                if(fdf == data[rrr].proposals.segment[1].flight[g].arrival){
                                    delay_name = data[rrr].airports[fdf].cases.pr;
                                    if(delay_name == 'о Киеве'){
                                        delay_name = delay_name.split('о ');
                                        delay_name = delay_name[1];
                                    }
                                }
                            }
                            more_info += '<div style="background: #f4f4f4;margin-left: 190px;height:30px;float:left;width:350px;"><div class="expl-flight-stop-icon  expl-flight-wait-icon" style="margin-left:10px;margin-top:5px;"><i class="fa fa-clock-o"></i></div><div class="expl-flight-layover-airport"  style="margin-top:5px;">Пересадка в '+delay_name+'</div><div class="expl-flight-duration"  style="margin-top:5px;">'+parse_time(data[rrr].proposals.segment[1].flight[g+1].delay)+' </div></div>';

                        }

                    }
                        more_info+='</div>';
                }

                    trt = 0;
                    gf = 0;
                    var view_departure = name_dist_from + ' - ' + name_dist_to;

                    var dep = '';
                    var arr = '';
                    var dp_time = '';
                    dep += '<li>' + departure_to[0] + '<i class="awe-icon awe-icon-arrow-right"></i></li>';
                    arr += '<li>' + departure_from[0] + '<i class="awe-icon awe-icon-arrow-right"></i></li>';
                    for (var i = 0; i < arrival_to.length; i++) {
                        dep += '<li>' + arrival_to[i] + '<i class="awe-icon awe-icon-arrow-right"></i></li>';
                    }
                    for (var t = 0; t < delay_to.length; t++) {

                        duration_tos += delay_to[t];
                    }


                    for (var t = 0; t < duration_to.length; t++) {
                        duration_tos += parseInt(duration_to[t], 10);
                    }

                    duration_tos = parse_time(duration_tos);

                    dp_time = ' <span>' + departure_time_to[0] + '</span><span class="date" data-locale="ru">' + departure_date_to[0] + '</span></td><td class="arrive"><span>' + arrival_time_to[arrival_time_to.length - 1] + '</span></td><td class="duration"><span>' + duration_tos + '</span>';

                    if(cure != null){
                        switch (cure) {
                            case 'usd':
                                    min_pr = Math.round(min_pr / currency_rate.usd);
                                    min_pr = accounting.formatMoney(min_pr, "$", 0, " ", ",", "%s%v");
                                    cur0 = Math.round(cur0 / currency_rate.usd);
                                curese = 'usd';
                                break;
                            case 'byr':
                                    min_pr = Math.round(min_pr / currency_rate.byr);
                                    min_pr = accounting.formatMoney(min_pr, "Br", 0, " ", ",", "%v %s");
                                    cur0 = Math.round(cur0 / currency_rate.byr);
                                curese = 'byr';
                                break;
                            case 'rub':
                                    min_pr = Math.round(min_pr );
                                    min_pr = accounting.formatMoney(min_pr, "Руб.", 0, " ", ",", "%v %s");
                                    cur0 = Math.round(cur0);
                                curese = 'rub';
                                break;
                            case 'eur':
                                    min_pr = Math.round(min_pr / currency_rate.eur);
                                    min_pr = accounting.formatMoney(min_pr, "€", 0, " ", ",", "%s%v");
                                    cur0 = Math.round(cur0 / currency_rate.eur);
                                curese = 'eur';
                                break;
                            case 'uah':
                                    min_pr = Math.round(min_pr / currency_rate.uah);
                                    min_pr = accounting.formatMoney(min_pr, "₴", 0, " ", ",", "%s%v");
                                    cur0 = Math.round(cur0 / currency_rate.uah);
                                curese = 'uah';
                                break;
                        }
                    }else{
                        min_pr = Math.round(min_pr / currency_rate.byr);
                        min_pr = accounting.formatMoney(min_pr, "Br", 0, " ", ",", "%v %s");
                        cur0 = Math.round(cur0 / currency_rate.byr);
                        curese = 'byr';
                    }



                    if(typeof data[rrr].proposals.segment[1] != 'undefined') {
                        for (var i = 0; i < arrival_from.length; i++) {
                            arr += '<li>' + arrival_from[i] + '<i class="awe-icon awe-icon-arrow-right"></i></li>';
                        }
                        for (var t = 0; t < delay_from.length; t++) {
                            duration_froms += delay_from[t];
                        }
                        for (var t = 0; t < duration_from.length; t++) {
                            duration_froms += parseInt(duration_from[t], 10);
                        }
                        duration_froms = parse_time(duration_froms);
                        arv_time = ' <span>' + departure_time_from[0] + '</span></td><td class="arrive"><span>' + arrival_time_from[arrival_time_from.length - 1] + '</span><span class="date" data-locale="ru">' + departure_date_from[0] + '</span></td><td class="duration"><span>' + duration_froms + '</span>';







                        $('.filter-item-wrapper').append('<div class="flight-item"><div class="item-media"><div class="image-cover"><img src=" http://pics.avs.io/140/140/' + validating_carrier + '.png" alt=""></div> </div> <div class="item-body"> <div class="item-title"> <h2> <a  type="button" class="full_info_link">' + view_departure + '</a> </h2> </div> <table class="item-table"> <thead> <tr> <th class="route">Путь</th> <th class="depart">Вылет</th> <th class="arrive">Прибытие</th> <th class="duration">Длительнсоть</th> </tr> </thead> <tbody> <tr> <td class="route"> <ul>' + dep + ' </ul> </td> <td class="depart">' + dp_time + ' </td> </tr> <tr> <td class="route"> <ul>' + arr + ' </ul> </td> <td class="depart">' + arv_time + ' </td> </tr> </tbody> </table> </div> <div class="item-price-more"> <div class="price"> <span class="amount" price="'+cur0+'" cur="'+curese+'">' + min_pr + ' </span> </div> <a href="/avia/buy/'+search_id+'/'+url+'" class="awe-btn"  target="_blank" style="padding:5px;">Купить <br> на '+main_gate+'</a> </div>'+more_info+' <a id="avia_more_button" class="awe-btn avia_more_button"  con="'+eeee+'">Подробнее</a> </div>');

                    }else{
                        $('.filter-item-wrapper').append('<div class="flight-item"><div class="item-media"><div class="image-cover"><img src=" http://pics.avs.io/140/140/' + validating_carrier + '.png" alt=""></div> </div> <div class="item-body"> <div class="item-title"> <h2> <a  type="button" class="full_info_link">' + view_departure + '</a> </h2> </div> <table class="item-table"> <thead> <tr> <th class="route">Путь</th> <th class="depart">Вылет</th> <th class="arrive">Прибытие</th> <th class="duration">Длительнсоть</th> </tr> </thead> <tbody> <tr> <td class="route"> <ul>' + dep + ' </ul> </td> <td class="depart">' + dp_time + ' </td> </tr> <tr>  </tbody> </table> </div> <div class="item-price-more"> <div class="price"> <span class="amount"  price="'+cur0+'"  cur="'+curese+'">' + min_pr + '</span> </div> <a href="/avia/buy/'+search_id+'/'+url+'" class="awe-btn"  target="_blank">Купить <br> на '+main_gate+'</a> </div>'+more_info+'  <a id="avia_more_button" class="awe-btn avia_more_button" con="'+eeee+'">Подробнее</a></div');

                    }






                    eeee++;

                    duration_tos = 0;
                    duration_froms = 0;
                    departure_to = []; // Место отпврелние
                    arrival_to = [];  // Место прибытия
                    departure_date_to = [];   // Дата отправления
                    departure_time_to = []; // Время отправления
                    arrival_date_to = [];  //Дата прибытия
                    arrival_time_to = [];  //Время прибытия
                    duration_to = []; // Время перелёта
                    delay_to = [];

                    departure_from = []; // Место отпврелние
                    arrival_from = [];  // Место прибытия
                    departure_date_from = [];//та отправления
                    departure_time_from = []; // Время отправления
                    arrival_date_from = [];  //Дата прибытия
                    arrival_time_from = [];  //Время прибытия
                    duration_from = []; // Время перелёта
                    delay_from = [];

                }

            }
        $('.avia_more_button').bind('click',function () {
            $(this).prev().toggle('slow', function () {
                if ($(this).css('display') == 'block') {
                    $(this).next().html('Скрыть');
                }
                if ($(this).css('display') == 'none') {
                    $(this).next().html('Подробнее');
                }
            });

        });

    }


    function rerender(){
        $('.filter-item-wrapper').html('');
    };

    function search(url){
        $.ajax({
            type:'POST',
            data: {_token: CSRF_TOKEN},
            dataType: 'json',
            beforeSend:function(){

            },
            complete:function(){

            },
            url:url,
            success:function(data){
                parser(url,data);
            },
            error: function(e){

                $( "#progressbar").css({'display':'none'});
            }
        });

    }

    var srt = 0;
    var ende = 10;

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height() - 600 ) {
            if($('.filter-item-wrapper').html().length != 0 && status == 1){
                $('.not_end').empty();
                srt+=10;
                ende += 10;
                view(ticket, srt, ende);

                $('.avia_more_button').unbind('click');

                $('.avia_more_button').bind('click',function () {
                    $(this).prev().toggle('slow', function () {
                        if ($(this).css('display') == 'block') {
                            $(this).next().html('Скрыть');
                        }
                        if ($(this).css('display') == 'none') {
                            $(this).next().html('Подробнее');
                        }
                    });
                });
            }else if($('.filter-item-wrapper').html().length != 0 && status == 0){
                $('.not_end').empty();
                $('.filter-item-wrapper').append('<div class="container not_end" style="margin:0 auto;text-align: center;"><h4 style="color:#666">Дождитесь окончания поиска</h4></div>');
            }
        }

    });

    $('#currency').change(function(){
       change_currency($('#currency').val());
    });

    function change_currency(cur){
        $('.amount').each(function(){
            switch (cur) {
                case 'usd':
                    if($(this).attr('cur') == 'byr'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.usd);
                        min_pr = accounting.formatMoney(min_pr, "$", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.usd);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'usd');
                        $(this).html(min_pr);
                        cure = 'usd';
                    }else if($(this).attr('cur') == 'eur'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.eur) / currency_rate.usd);
                        min_pr = accounting.formatMoney(min_pr, "$", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.eur) / currency_rate.usd);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'usd');
                        $(this).html(min_pr);
                        cure = 'usd';
                    }else if($(this).attr('cur') == 'rub'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) / currency_rate.usd));
                        min_pr = accounting.formatMoney(min_pr, "$", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) / currency_rate.usd));
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'usd');
                        $(this).html(min_pr);
                        cure = 'usd';
                    }else if($(this).attr('cur') == 'uah'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.uah) / currency_rate.usd);
                        min_pr = accounting.formatMoney(min_pr, "$", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.uah) / currency_rate.usd);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'usd');
                        $(this).html(min_pr);
                        cure = 'usd';
                    }

                    break;
                case 'byr':
                    if($(this).attr('cur') == 'usd'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.usd) / currency_rate.byr);
                        min_pr = accounting.formatMoney(min_pr, "Br", 0, " ", ",", "%v %s");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.usd) / currency_rate.byr);
                        $(this).attr('price', cur0);
                        $(this).attr('cur',  'byr');
                        $(this).html(min_pr);
                        cure = 'byr';
                    }
                    if($(this).attr('cur') == 'eur'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.eur) / currency_rate.byr);
                        min_pr = accounting.formatMoney(min_pr, "Br", 0, " ", ",", "%v %s");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.eur) / currency_rate.byr);

                        $(this).attr('price', cur0);
                        $(this).attr('cur',  'byr');
                        $(this).html(min_pr);
                        cure = 'byr';
                    }
                    if($(this).attr('cur') == 'rub'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) / currency_rate.byr) );
                        min_pr = accounting.formatMoney(min_pr, "Br", 0, " ", ",", "%v %s");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) / currency_rate.byr));

                        $(this).attr('price', cur0);
                        $(this).attr('cur',  'byr');
                        cure = 'byr';
                    }
                    if($(this).attr('cur') == 'uah'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.uah) / currency_rate.byr);
                        min_pr = accounting.formatMoney(min_pr, "Br", 0, " ", ",", "%v %s");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.uah) / currency_rate.byr);
                        $(this).attr('price', cur0);
                        $(this).attr('cur',  'byr');
                        $(this).html(min_pr);
                        cure = 'byr';
                    }
                    break;
                case 'rub':
                    if($(this).attr('cur') == 'usd'){
                        min_pr = Math.round(parseInt($(this).attr('price'),10) * currency_rate.usd);
                        min_pr = accounting.formatMoney(min_pr, "Руб.", 0, " ", ",", "%v %s");
                        cur0 = Math.round(parseInt($(this).attr('price'),10) * currency_rate.usd);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'rub');
                        $(this).html(min_pr);
                        cure = 'rub';
                    }
                    if($(this).attr('cur') == 'eur'){
                        min_pr = Math.round(parseInt($(this).attr('price'),10) * currency_rate.eur);
                        min_pr = accounting.formatMoney(min_pr, "Руб.", 0, " ", ",", "%v %s");
                        cur0 = Math.round(parseInt($(this).attr('price'),10) * currency_rate.eur);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'rub');
                        $(this).html(min_pr);
                        cure = 'rub';
                    }
                    if($(this).attr('cur') == 'byr'){
                        min_pr = Math.round(parseInt($(this).attr('price'),10) * currency_rate.byr);
                        min_pr = accounting.formatMoney(min_pr, "Руб.", 0, " ", ",", "%v %s");
                        cur0 = Math.round(parseInt($(this).attr('price'),10) * currency_rate.byr);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'rub');
                        $(this).html(min_pr);
                        cure = 'rub';
                    }
                    if($(this).attr('cur') == 'uah'){
                        min_pr = Math.round(parseInt($(this).attr('price'),10) * currency_rate.uah);
                        min_pr = accounting.formatMoney(min_pr, "Руб.", 0, " ", ",", "%v %s");
                        cur0 = Math.round(parseInt($(this).attr('price'),10) * currency_rate.uah);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'rub');
                        $(this).html(min_pr);
                        cure = 'rub';
                    }

                    break;
                case 'eur':
                    if($(this).attr('cur') == 'usd'){
                        min_pr =  Math.round( (parseInt($(this).attr('price'),10) * currency_rate.usd) / currency_rate.eur);
                        min_pr = accounting.formatMoney(min_pr, "€", 0, " ", ",", "%s%v");
                        cur0 = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.usd) / currency_rate.eur);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'eur');
                        $(this).html(min_pr);
                        cure = 'eur';
                    }
                    if($(this).attr('cur') == 'rub'){
                        min_pr =  Math.round( (parseInt($(this).attr('price'),10) / currency_rate.eur));
                        min_pr = accounting.formatMoney(min_pr, "€", 0, " ", ",", "%s%v");
                        cur0 = Math.round( (parseInt($(this).attr('price'),10) / currency_rate.eur) );
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'eur');
                        $(this).html(min_pr);
                        cure = 'eur';
                    }
                    if($(this).attr('cur') == 'byr'){
                        min_pr =  Math.round( (parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.eur);
                        min_pr = accounting.formatMoney(min_pr, "€", 0, " ", ",", "%s%v");
                        cur0 = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.eur);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'eur');
                        $(this).html(min_pr);
                        cure = 'eur';
                    }
                    if($(this).attr('cur') == 'uah'){
                        min_pr =  Math.round( (parseInt($(this).attr('price'),10) * currency_rate.uah) / currency_rate.eur);
                        min_pr = accounting.formatMoney(min_pr, "€", 0, " ", ",", "%s%v");
                        cur0 = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.uah) / currency_rate.eur);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'eur');
                        $(this).html(min_pr);
                        cure = 'eur';
                    }

                    break;
                case 'uah':
                    if($(this).attr('cur') == 'usd'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.usd) / currency_rate.uah);
                        min_pr = accounting.formatMoney(min_pr, "₴", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.uah);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'uah');
                        $(this).html(min_pr);
                        cure = 'uah';
                    }
                    if($(this).attr('cur') == 'eur'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.eur) / currency_rate.uah);
                        min_pr = accounting.formatMoney(min_pr, "₴", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.eur) / currency_rate.uah);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'uah');
                        $(this).html(min_pr);
                        cure = 'uah';
                    }
                    if($(this).attr('cur') == 'rub'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) / currency_rate.uah) );
                        min_pr = accounting.formatMoney(min_pr, "₴", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) / currency_rate.uah));
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'uah');
                        $(this).html(min_pr);
                        cure = 'uah';
                    }
                    if($(this).attr('cur') == 'byr'){
                        min_pr = Math.round( (parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.uah);
                        min_pr = accounting.formatMoney(min_pr, "₴", 0, " ", ",", "%s%v");
                        cur0 = Math.round((parseInt($(this).attr('price'),10) * currency_rate.byr) / currency_rate.uah);
                        $(this).attr('price', cur0);
                        $(this).attr('cur', 'uah');
                        $(this).html(min_pr);
                        cure = 'uah';
                    }
                    break;
            }
        });
    }



});