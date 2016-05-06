@extends('main')

@section('content')
    <?php echo csrf_field(); ?>
    <section>
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Destinations</a>
                    </li>
                    <li>
                        <a href="#">North America</a>
                    </li>
                    <li>
                        <a href="#">USA</a>
                    </li>
                    <li>
                        <span>NewYork</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="product-detail">
        <div class="container">
            @foreach($trip as $trip_detail)
            <div class="row">
                <div class="col-md-6">
                    <div class="product-detail__info">
                        <div class="product-title">
                                <h2>{{$trip_detail->name_trip}}</h2>


                        </div>

                        <div class="trips">
                            <div class="item">
                                <h6>Продолжительность</h6>
                                <p>
                                    <i class="fa fa-clock-o"></i>
                                    {{$trip_detail->count_night}} ночей
                                </p>
                            </div>
                            <div class="item">
                                <h6>Тип</h6>
                                <p>{{$trip_detail->category_name}}</p>
                            </div>
                            <div class="item">
                                <h6>Трансфер</h6>
                                <p>{{$trip_detail->transport_name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Туроперотор</h5>
                                <div class="col-md-6">
                                    <img src="http://traveling.by/files/operator/2015/09/4880e7f1d9edd236258af2872cc72d13-thumb-210x85.png" style="width: 200px;height: 100px;">
                                </div>
                                <div class="col-md-6" style="margin-top: -60px;">
                                    <h6>{{$trip_detail->phone1}}</h6>
                                    <h6>{{$trip_detail->phone2}}</h6>
                                    <h6>{{$trip_detail->phone3}}</h6>
                                    <h6>{{$trip_detail->phone4}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>Время работы</h6>
                                    <p style="color: #333">{{$trip_detail->work_time}}</p>
                                </div>
                                <div class="col-md-6" >
                                    <h6>Адрес</h6>
                                    <p style="color: #333">{{$trip_detail->address}}</p>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-detail__gallery">
                        <div class="product-slider-wrapper">
                            <div class="product-slider">
                                <div class="item">
                                    <img src="../images/1.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/2.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/3.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/4.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/5.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/6.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/7.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/8.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/9.jpg" alt=""></div>
                                <div class="item">
                                    <img src="../images/10.jpg" alt=""></div>
                            </div>
                            <div class="product-slider-thumb-row">
                                <div class="product-slider-thumb">
                                    <div class="item">
                                        <img src="../images/demo-thumb-1.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-2.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-3.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-4.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-5.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-1.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-2.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-3.jpg" alt=""></div>
                                    <div class="i../tem">
                                        <img src="../images/demo-thumb-4.jpg" alt=""></div>
                                    <div class="item">
                                        <img src="../images/demo-thumb-5.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="ticket-price">
                            <thead>
                            <tr>
                                <th style="width: 20%;">
                                    <span>Дата</span>
                                </th>
                                <th class="adult" style="width: 20%;">
                                    <span>Ночей</span>
                                </th>
                                <th class="adult" style="width: 20%;">
                                    <span>Купить до</span>
                                </th>
                                <th class="ticket-price" style="width: 20%;">
                                    <p   style="color: #4fcd84;margin-left: 20px;">Цена </p>
                                </th>
                                <th class="ticket-price" style="width: 20%;" >

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($price_trips as $price_trip)
                                    <tr>
                                        <td  style="width: 20%;"> <h6 style="font-size: 16px;">{{$price_trip->trip_date}}</h6>
                                        </td>
                                        <td style="width: 20%;"> <h6 style="font-size: 16px;">{{$price_trip->count_night}} ночей</h6>
                                        </td>
                                        <td style="width: 20%;"> <h6 style="font-size: 16px;">{{$price_trip->buy_to}}</h6>
                                        </td>
                                        <td style="width: 20%;"> <h6 style="font-size: 16px;color: #4fcd84;margin-left: 20px;">{{$price_trip->price}}</h6>
                                        </td>
                                        <td class="kid" style="width: 20%;"> <a href="#" class="awe-btn awe-btn-style3">Заказать</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            <div class="row">
                <div class="col-md-9">
                    <div class="product-tabs tabs">
                        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true">
                                <a  href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Подробности тура</a>
                            </li>
                        </ul>
                        <div class="product-tabs__content">
                            <div id="tabs-1">
                                {!! $trip_detail->full_about_trip !!}
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="detail-sidebar">
                        <div class="call-to-book">
                            <i class="awe-icon awe-icon-phone"></i>
                            <em>Call to book</em>
                            <span>+1-888-8765-1234</span>
                        </div>
                        <div class="booking-info">
                            <h3>Booking info</h3>
                            <div class="form-select-date">
                                <div class="form-elements">
                                    <label>Select Travel Date</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date"></div>
                                    <span>* Vouchers valid for 12 months after purchase.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements form-adult">
                                    <label>Adult</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>12 yo and above</span>
                                </div>
                                <div class="form-elements form-kids">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <span>11 and under</span>
                                </div>
                            </div>
                            <div class="price">
                                <em>Total for this booking</em>
                                <span class="amount">$5,923</span>
                            </div>
                            <div class="form-submit">
                                <div class="add-to-cart">
                                    <button type="submit">
                                        <i class="awe-icon awe-icon-cart"></i>
                                        Add this to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="awe-search-tabs__content tabs__content">

                        <div  class="search-flight ui-tabs-panel ui-widget-content ui-corner-bottom" >
                            <h2>Заказать тур</h2>
                            <form>
                                <div class="form-group" style="width: 55%">
                                    <div class="form-elements">
                                        <label>Ваше имя *</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="text" placeholder="Имя" name="name" ></div>
                                    </div>

                                    <div class="form-elements">
                                        <label>Дата выезда от</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" class="awe-calendar from hasDatepicker" placeholder="Туда" id="avia_date_from" readonly="true" name="avia_date_from"></div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Email</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" placeholder="Имя" name="name" ></div>
                                    </div>
                                </div>

                                <div class="form-groups" style="width: 45%;float: left;">
                                    <div class="form-elements">
                                        <label>Телефон *</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="text" placeholder="Имя" name="name" ></div>
                                    </div>
                                    <div class="form-elements" >
                                        <label>Обратно</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" class="awe-calendar to hasDatepicker" placeholder="Обратно" id="avia_date_to" readonly="true" name="avia_date_to"></div>

                                    </div>
                                    <div class="form-elements">
                                        <label>Skype</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" placeholder="Имя" name="name" ></div>
                                    </div>

                                </div>
                                <div >
                                    <button type="button" class="awe-btn awe-btn-style3" style="width: 100%;">Заказать</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

@endsection