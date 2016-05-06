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
                        <span>Отели</span>
                    </li>
                </ul>
            </div>
            <div class="find">
                <h2 class="text-center">Найди себе отель</h2>
                <form id="hotel_search_form">
                    <div class="form-group">
                        <div class="form-elements">
                            <label>Город</label>
                            <div class="form-item"> <i class="awe-icon awe-icon-marker-1"></i>
                                <input type="text" placeholder="Город" id="hotel_city"></div>
                        </div>
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
                        <div class="form-actions">
                            <input type="button" value="Найти отель" id="hotel_submit"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sort">
                Сортировка:
                <ul class="buttonSet-list">
                    <li class="buttonSet-item"><a class="buttonSet-item-link" data-role="buttonSet-item-link" data-value="price">Цена</a></li>
                    <li class="buttonSet-item"><a class="buttonSet-item-link active"  data-role="buttonSet-item-link" data-value="popularity">Популярность</a></li>
                    <li class="buttonSet-item"><a class="buttonSet-item-link" data-role="buttonSet-item-link" data-value="guestScore">Оценка</a></li>
                    <li class="buttonSet-item"><a class="buttonSet-item-link" data-role="buttonSet-item-link" data-value="stars">Звездность</a></li>
                    <li class="buttonSet-item"><a class="buttonSet-item-link" data-role="buttonSet-item-link" data-value="name">Название</a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-10 col-md-push-2">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">
                    </div>
                    <div class="page__pagination">

                        <div id="cssload-pgloading">
                            <div class="cssload-loadingwrap">
                                <ul class="cssload-bokeh">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                            <div class="pag">
                                <span class="pagination-prev" id="pagination-prev">
								   <i class="fa fa-caret-left"></i> Предыдущая страница
								</span>
								<span class="pagination-next" id="pagination-next">
									Следующая страница <i class="fa fa-caret-right"></i>
								</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-pull-10">
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