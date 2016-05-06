@extends('main')

@section('content')
    <?php echo csrf_field(); ?>
    <section class="awe-parallax category-heading-section-demo">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="category-heading-content category-heading-content__2 text-uppercase">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Главная</a>
                        </li>
                        <li>
                            <span>Туры</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="awe-search-tabs tabs ui-tabs ui-widget ui-widget-content ui-corner-all" id="container">
                <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist"
                    id="tab-list">

                    <li class="ui-state-default ui-corner-top  ui-tabs-active ui-state-active" role="tab" tabindex="0"
                        aria-controls="awe-search-tabs-1" aria-labelledby="ui-id-1" aria-selected="true">
                        <a href="#awe-search-tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1"
                           id="ui-id-3">
                            <i class="awe-icon awe-icon-briefcase"></i> <span class="toggle_index_form"
                                                                          style="font-weight:400; padding-right:30px;">Поиск туров</span>
                        </a>
                    </li>

                    <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"
                        aria-controls="awe-search-tabs-3" aria-labelledby="ui-id-3" aria-selected="false">
                        <a href="#awe-search-tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1"
                           id="ui-id-3">
                            <i class="awe-icon awe-icon-plane"></i> <span class="toggle_index_form"
                                                                          style="font-weight:400; padding-right:30px;">Поиск авиабилетов</span>
                        </a>
                    </li>
                    <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"
                        aria-controls="awe-search-tabs-2" aria-labelledby="ui-id-2" aria-selected="false">
                        <a href="#awe-search-tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1"
                           id="ui-id-2">
                            <i class="awe-icon awe-icon-hotel"></i> <span class="toggle_index_form"
                                                                          style="font-weight:400; padding-right:30px;">Поиск отелей</span>
                        </a>
                    </li>
                </ul>
                <div class="awe-search-tabs__content tabs__content">

                    <div id="awe-search-tabs-1" class="search-trip">
                        <h2>Туры</h2>

                        <form id="trip_search_form" method="get">
                            <div class="form-group" style="width: 270px;">
                                <div class="form-elements">
                                    <label>Страна</label>

                                    <div class="form-item">
                                        <select class="awe-select" id="country_to" data-width="100px"  data-size="10" title='Выберите страну' name="country_to">
                                            <option value="">Любая</option>
                                            @foreach($countrys as $country)
                                                <option value="{{$country->id}}" >{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Транспорт</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="transport" id="transport">
                                            <option value="">любой</option>
                                            <option value="1">Самолёт</option>
                                            <option value="2">Автобус</option>
                                            <option value="3">Поезд</option>
                                            <option value="4">Лайнер</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width: 490px; margin-left: -20px;">
                                <div class="form-elements">
                                    <label>Курорт</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="city_to" id="city_to">
                                            <option value="">Любой</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Вид отдыха</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="category" id="category">
                                            <option value="">Любой</option>
                                            @foreach($categorys as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="form-elements">
                                    <label>Даты</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="date" id="date">
                                            <option value="">Любая</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <!--<span>текст</span>-->
                                </div>
                                <div class="form-elements">
                                    <label>Цена от</label>

                                    <div class="form-item">
                                        <i class="awe-icon fa fa-money"></i>
                                        <input type="text" placeholder="0 рублей" id="price" name="price" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: -50px;">
                                <div class="form-elements">
                                    <label>Из города</label>

                                    <div class="form-item" style="width: 180px;">
                                        <select class="awe-select" name="city_from" id="city_from">
                                            <option value="">Любой</option>
                                            <option value="79">Из Минска</option>
                                            <option value="885">Из Москвы</option>
                                            <option value="1228">Из Киева</option>
                                            <option value="508">Из Вильнюса</option>
                                            <option value="510">Из Каунаса</option>
                                            <option value="667">Из Варшавы</option>
                                            <option value="75">Из Бреста</option>
                                            <option value="950">Из Санкт-Петербурга</option>
                                            <option value="77">Из Гродно</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Цена до</label>

                                    <div class="form-item" style="width: 180px;">
                                        <i class="awe-icon fa fa-money"></i>
                                        <input type="text" placeholder="0 рублей" id="price_to">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions" style="margin-left: 30px;">
                                <input type="submit" value="Найти тур" id="trip_submit"></div>
                        </form>
                    </div>

                    <div id="awe-search-tabs-2" class="search-hotel">

                        <h2>Поиск отелей</h2>

                        <form id="hotel_search_form">
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Город</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" placeholder="Город" id="hotel_city"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>С</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar from" placeholder="Дата"
                                               id="hotel_date_from" readonly="true"></div>
                                </div>
                                <div class="form-elements">
                                    <label>По</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar to" placeholder="Дата" id="hotel_date_to"
                                               readonly="true"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Гостей</label>

                                    <div class="form-item">
                                        <select class="awe-select" id="hotel_people">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="button" value="Найти отель" id="hotel_submit"></div>
                        </form>
                    </div>
                    <div id="awe-search-tabs-3" class="search-flight">
                        <!--<script charset="utf-8" src="//www.travelpayouts.com/widgets/910e8b17ccab03f57cef5c0bb3bb3940.js?v=587" async></script>-->
                        <h2>Купить дешевые авиабилеты</h2>

                        <form id="avia_search_form">
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Откуда</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" placeholder="Откуда" id="avia_from" name="avia_from"></div>
                                </div>
                                <div class="form-elements">
                                    <label>Куда</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" placeholder="Куда" id="avia_to" name="avia_to"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Туда</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar from" placeholder="Туда"
                                               id="avia_date_from" readonly="true" name="avia_date_from"></div>
                                </div>
                                <div class="form-elements">
                                    <label>Обратно</label>

                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar to" placeholder="Обратно"
                                               id="avia_date_to" readonly="true" name="avia_date_to"></div>

                                </div>
                                <div class="form-elements">
                                    <label>Взрослых</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="avia_adults" id="avia_adults">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <span>12 лет и старше</span>
                                </div>
                                <div class="form-elements">
                                    <label>Дети</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="avia_children" id="avia_children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <span>0-11 лет</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>Класс перелёта</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="avia_trip_class" id="trip_class">
                                            <option value="Y">Эконом</option>
                                            <option value="C">Бизнес</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Младенцы</label>

                                    <div class="form-item">
                                        <select class="awe-select" name="avia_infants" id="avia_infants">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <span>до 2-ух лет</span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="button" value="Найти билет" id="avia_submit" name="avia_submit"></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="filter-page" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <div class="sort" style="background: #fff">
                        Сортировать по:
                        <ul class="buttonSet-list">
                            <li class="buttonSet-item"><a class="buttonSet-item-link" data-role="buttonSet-item-link" data-value="price" id="sort_price">Ценe <i id="sort_price_li" class="fa fa-angle-up"></i></a></li>
                            <li class="buttonSet-item"><a class="buttonSet-item-link"  data-role="buttonSet-item-link" data-value="popularity" id="sort_date">Дате добавления <i id="sort_date_li" class="fa fa-angle-up"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="page-sidebar">
                        <div class="sidebar-title">
                            <h2>Trip</h2>
                            <div class="clear-filter">
                                <a href="#">Clear all</a>
                            </div>
                        </div>
                        <div class="widget widget_has_radio_checkbox">
                            <h3>Trip Type</h3>
                            <ul>
                                <li>
                                    <label> <input type="checkbox"><i class="awe-icon awe-icon-check"></i>Amusement park</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Natural sight-seeing</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Pool &amp; Waterpark</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Museum</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Religious and Cultural place</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Shoping mall &amp; Market</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Others</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_price_filter">
                            <h3>Price Level</h3>
                            <div class="price-slider-wrapper">
                                <div class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                    <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
                                    <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a>
                                </div>
                                <div class="price_slider_amount">
                                    <div class="price_label">
                                        <span class="from">$0</span> - <span class="to">$10000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_has_radio_checkbox">
                            <h3>Star Rating</h3>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <span class="rating">Unrated</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_has_radio_checkbox">
                            <h3>Distance</h3>
                            <ul>
                                <li>
                                    <label><input type="checkbox"><i class="awe-icon awe-icon-check"></i> Near Airport</label></li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Near Shopping District</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Near Attractions</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Near Traffic station</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_has_radio_checkbox">
                            <h3>Service Include</h3>
                            <ul>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Room service</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Laundry</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Meal at room</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Wifi &amp; internet</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Parking lot</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> TV and appliances</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Pool</label>
                                </li>
                                <li>
                                    <label><input type="checkbox"> <i class="awe-icon awe-icon-check"></i> Gym and Spa</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_product_tag_cloud">
                            <h3>Tags</h3>
                            <div class="tagcloud">
                                <a href="#">Hotel</a>
                                <a href="#">Motel</a>
                                <a href="#">Hostel</a>
                                <a href="#">Homestay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="filter-page__content">
                        <div class="filter-item-wrapper">




                        </div>
                        <div class="page__pagination">
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection