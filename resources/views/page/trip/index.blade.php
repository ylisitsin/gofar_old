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
            <div class="awe-search-tabs tabs ui-tabs ui-widget ui-widget-content ui-corner-all"  id="container">
                <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist" id="tab-list">

                    <li class="ui-state-default ui-corner-top  ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="awe-search-tabs-3" aria-labelledby="ui-id-3" aria-selected="true">
                        <a href="#awe-search-tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">
                            <i class="awe-icon awe-icon-plane"></i> <span class="toggle_index_form" style="font-weight:400; padding-right:30px;">Поиск авиабилетов</span>
                        </a>
                    </li>
                    <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="awe-search-tabs-2" aria-labelledby="ui-id-2" aria-selected="false">
                        <a href="#awe-search-tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">
                            <i class="awe-icon awe-icon-hotel"></i> <span class="toggle_index_form" style="font-weight:400; padding-right:30px;">Поиск отелей</span>
                        </a>
                    </li>
                </ul>
                <div class="awe-search-tabs__content tabs__content">

                    <div id="awe-search-tabs-2" class="search-hotel">
                        <!--<script charset="utf-8" src="//www.travelpayouts.com/widgets/36680651425ddd66116f35ea9d573327.js?v=587" async></script>-->

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
                                        <input type="text" class="awe-calendar from" placeholder="Дата"  id="hotel_date_from" readonly="true"></div>
                                </div>
                                <div class="form-elements">
                                    <label>По</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar to" placeholder="Дата" id="hotel_date_to" readonly="true"></div>
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
                            <div class="form-group" >
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
                                        <input type="text" class="awe-calendar from" placeholder="Туда"  id="avia_date_from" readonly="true" name="avia_date_from"></div>
                                </div>
                                <div class="form-elements">
                                    <label>Обратно</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar to" placeholder="Обратно" id="avia_date_to" readonly="true" name="avia_date_to"></div>

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
                                        <select class="awe-select"   name="avia_trip_class" id="trip_class">
                                            <option value="Y">Эконом</option>
                                            <option value="C">Бизнес</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Младенцы</label>
                                    <div class="form-item">
                                        <select class="awe-select"  name="avia_infants"  id="avia_infants">
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
    <section class="masonry-section-demo" id="country">
        <div class="container" >
            <div class="destination-grid-content">
                <div class="section-title">
                    <h3>
                        Популярные направления
                    </h3>
                </div>
                <div class="row">
                    <div class="awe-masonry" >
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection