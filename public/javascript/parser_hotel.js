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

    var url = location.href;
    var split1= url.split('/hotel/');

    var url = split1[0].split('//');
    var url = url[1];

    var splite = split1[1].split('/');
    var str = str_split(splite,1);

    var city_iata = str[0] + str[1]+ str[2];

    var hotel_date_from = str[3]+str[4]+str[5]+str[6]+str[7]+str[8]+str[9]+str[10]+str[11]+str[12];
    var hotel_date_to = str[13]+str[14]+str[15]+str[16]+str[17]+str[18]+str[19]+str[20]+str[21]+str[22];

    var count_people = str[23];

    var cur = 'byr';

    var CSRF_TOKEN = $('input[name="_token"]').attr('value');
    var limit = 10;
    var offset = 0;
    var sortBy = 'popularity';
    var sortAsc = 0;
    var search_id;

    $('#cssload-pgloading').css({'display':'block'});

    var  name_dist_from = '';
    $.ajax({
        type:"GET",
        url: "http://places.aviasales.ru/",
        dataType: "jsonp",
        data:{
            locale: "ru",
            term: city_iata
        },
        success: function(data){
            name_dist_from = data[0].name;
            $('#hotel_city').val(name_dist_from);
            $('#hotel_city').attr('code',city_iata)
            $('#hotel_date_from').val(hotel_date_from);
            $('#hotel_date_to').val(hotel_date_to);
            $('#hotel_people').val(count_people);
        }
    });

    function search_ids(cur){
        var url_search_id = 'http://'+url+'/hotel/'+city_iata+'/'+hotel_date_from+'/'+hotel_date_to+'/'+count_people+'/'+cur+'/searchId';

        $.ajax({
            type: "POST",
            url: url_search_id,
            data:{_token: CSRF_TOKEN},
            success: function(data){
                search_id = data.searchId;
                search(search_id, 10, 0, sortBy, sortAsc);
            }
        });
    }
    search_ids(cur);

    function sort(data, type){
        switch (type){
            case 'price':
                var swapped;
                do {
                    swapped = false;
                    for(var i=0;i< Object.keys(data.result).length - 1;i++){
                        if (parseInt(data.result[i].rooms[0].total, 10) > parseInt(data.result[i+1].rooms[0].total, 10)) {
                                        var temp = data.result[i];
                                        data.result[i] = data.result[i+1];
                                        data.result[i + 1] = temp;
                                        swapped = true;
                                    }
                    }

                }while (swapped);
            break;
        }
        view_hotel(data);
    }

    function search(search_id,  limit, offset, sortBy, sortAsc){
        var search_url ='http://'+url+'/hotel/'+ search_id+'/'+limit+'/'+offset+'/'+sortBy+'/'+sortAsc+'/result';
        $.ajax({
            type: "POST",
            url: search_url,
            data:{_token: CSRF_TOKEN},
            beforeSend:function(){
                $('.filter-item-wrapper').html('');
                $('#cssload-pgloading').css({'display':'block'});
                $('.pag').css({'display':'none'});
            },
            success: function(data){
                if(typeof data.errorCode != 'undefined'){
                    if(data.errorCode == 4){
                        search(search_id,  10, offset, sortBy, sortAsc);
                    }
                }else{
                    view_hotel(data);
                }

            }
        });


    }

    function view_hotel(data){

        console.log(data);

        $('#cssload-pgloading').css({'display':'none'});
        $('.filter-item-wrapper').html('');
        $('.pag').css({'display':'block'});

        for(var num_hotel in data.result){
            var total_star = '<br>';

            var total_rating = '';

            var hotel_id = data.result[num_hotel].id;
            var address = data.result[num_hotel].address;
            var distance = data.result[num_hotel].distance + ' км от центра города';
            var guestScore = data.result[num_hotel].guestScore;
            var name = data.result[num_hotel].name;
            var stars = data.result[num_hotel].stars;
            var agencyId = data.result[num_hotel].rooms[0].agencyId;
            var agencyName = data.result[num_hotel].rooms[0].agencyName;
            var fullBookingURL = data.result[num_hotel].rooms[0].fullBookingURL;
            if(cur == 'byr'){
                var total_price = accounting.formatMoney(data.result[num_hotel].rooms[0].total, "Br", 0, " ", ",", "%v %s");
            }else if(cur == 'usd'){
                var total_price = accounting.formatMoney(data.result[num_hotel].rooms[0].total, "$", 0, " ", ",", "%s%v");
            }else if(cur == 'rub'){
                var total_price = accounting.formatMoney(data.result[num_hotel].rooms[0].total, "Руб.", 0, " ", ",", "%v %s");
            }else if(cur == 'eur'){
                var total_price = accounting.formatMoney(data.result[num_hotel].rooms[0].total, "€", 0, " ", ",", "%s%v");
            }else{
                var total_price = accounting.formatMoney(data.result[num_hotel].rooms[0].total, "₴", 0, " ", ",", "%s%v");
            }


            var night = Math.round(data.result[num_hotel].rooms[0].total / data.result[num_hotel].rooms[0].price);

            if(night == 1){
                var total_night = 'За '+night+' ночь';
            }else if(night >=2 && night<=4){
                var total_night = 'За '+night+' ночи';
            }else{
                var total_night = 'За '+night+' ночей';
            }

            var rating = data.result[num_hotel].rating;

            if(stars>0){
                total_star=''
                for(var i=0;i<stars;i++){
                    total_star += '<i class="fa fa-star"></i>';
                }
            }

            if(rating>=70){
                total_rating ='<span class="rate-text">оценка</span> <span class="count" style="color: #4fcd84; font-size: 24px;line-height: 0;margin-top: -7px;">'+rating/10+'</span>';
            }else if(rating>49 && rating<70){
                total_rating ='<span class="rate-text" style="color: #F27C38">оценка</span> <span class="count" style="color: #F27C38; font-size: 24px;line-height: 0;margin-top: -7px;">'+rating/10+'</span>';
            }


            $('.filter-item-wrapper').append('<div class="hotel-item"> <div class="item-media"> <div class="image-cover"> <img src="http://cdn.photo.hotellook.com/image_v2/crop/h'+hotel_id+'_0/600/400.auto" alt=""></div> </div> <div class="item-body"> <div class="item-title"> <h2> <a type="button">'+name+'</a> </h2> </div> <div class="item-hotel-star">'+total_star+' </div> <div class="item-address"> <i class="awe-icon awe-icon-marker-2"></i> '+address+' <br>'+distance+'</div> <div class="item-footer"> <div class="item-rate"> <span>'+total_rating+'</span> </div> <div class="item-icon"> <i class="awe-icon awe-icon-wifi"></i> </div> </div> </div> <div class="item-price-more"> <div class="price">'+total_night+' <span class="amount">'+total_price+'</span> </div> <a href="'+fullBookingURL+'" class="awe-btn"  target="_blank">Забронировать<br> на '+agencyName+'</a> </div> </div>');

        }

    }

    $('.buttonSet-item-link').click(function(){
        limit = 10;
        offset = 0;
        sortBy = $(this).attr('data-value');
        $('.buttonSet-item-link').removeClass('active');
        $(this).addClass('active');
        $('.pagination-prev').css({'display':'none'});
        if(sortBy != 'popularity'){
            sortAsc = 1;
        }else{
            sortAsc = 0;
        }
        search(search_id,limit,offset,sortBy,sortAsc);
    });

    $('.pagination-next').click(function(){
        limit +=10;
        offset += 10;
        if(offset>9){
            $('.pagination-prev').css({'display':'block'});
        }
        jQuery.scrollTo('.find', 200);
        search(search_id,  limit, offset, sortBy, sortAsc);
    });

    $('.pagination-prev').click(function(){
        limit -=10;
        offset -= 10;
        if(offset == 0){
            $('.pagination-prev').css({'display':'none'});
        }
        jQuery.scrollTo('.find', 200);
        search(search_id,  limit, offset, sortBy, sortAsc);
    });


    $('#currency').change(function(){
        cur = $('#currency').val();
        search_ids($('#currency').val());
    });

});