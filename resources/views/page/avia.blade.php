@extends('main')

@section('content')
    <?php echo csrf_field(); ?>
    <section class="awe-parallax category-heading-avia">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="category-heading-content category-heading-content__2 text-uppercase">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Главная</a>
                        </li>
                        <li>
                            <span>Авиабилеты</span>
                        </li>
                    </ul>
                </div>
                <div class="find">
                    <h2 class="text-center">Найди свой билет</h2>
                    <form id="avia_search_form" class="form-horizontal">
                        <div class="form-group" >
                            <div class="form-elements">
                                <label>Откуда</label>
                                <div class="form-item">
                                    <i class="awe-icon awe-icon-marker-1"></i>
                                    <input type="text" placeholder="Откуда" id="avia_from" name="avia_from"></div>
                            </div>
                            <div class="form-elements" style="width: 180px;">
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
                                <label>Класс перелёта</label>
                                <div class="form-item">
                                    <select class="awe-select"   name="avia_trip_class" id="trip_class">
                                        <option value="Y">Эконом</option>
                                        <option value="C">Бизнес</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="button" value="Найти билет" id="avia_submit" name="avia_submit"></div>
                        </div>
                        <div class="form-group">

                            <div class="form-elements">
                                <label>Куда</label>
                                <div class="form-item">
                                    <i class="awe-icon awe-icon-marker-1"></i>
                                    <input type="text" placeholder="Куда" id="avia_to" name="avia_to"></div>
                            </div>



                            <div class="form-elements"  style="width: 180px;">
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
                                <span>3-12 лет</span>
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

                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="filter-page">
        <div class="container">
            <div class="row">
                <div class="col-md-13">
                    <br>
                    <div id="progressbar"><div class="progress-label">Поиск...</div></div>
                </div>
                <div class="col-md-9">
                    <div class="filter-page__content">
                        <div class="filter-item-wrapper"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="page-sidebar">

                        <div class="sidebar-title">
                            Валюта:  <select class="awe-select" name="currency" id="currency">
                                <option value="byr">BYR</option>
                                <option value="usd">USD</option>
                                <option value="eur">EUR</option>
                                <option value="rub">RUB</option>
                                <option value="uah">UAH</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection