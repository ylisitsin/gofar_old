@extends('main')

@section('content')
    <section class="awe-parallax page-heading-demo" style="background-position:100% 12px;">
        <div class="awe-overlay">

        </div>
        <div class="container">
            <div class="blog-heading-content text-uppercase">
                <h2>БЛОГ</h2>
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
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-page__content blog-single">
                        <div class="post">
                            <div class="post-meta">
                                <div class="date"><?php $monthes = array(
                                            1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                                            5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                                            9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
                                    );
                                    echo(date('d ' ,strtotime($post->created_at)) . $monthes[(date('n', strtotime($post->created_at)))] . date(' Y')); ?></div>
                                <div class="cat"><ul><li><a href="{{url('/blog/category/'.$post->category)}}">{{$post->category}}</a></li></ul></div>
                            </div>
                            <div class="post-title"><h1>{{$post->title}}</h1></div>
                            <div class="post-body">
                                <div class="post-content">
                                    {!!$post->text!!}
                                </div>
                            </div>
                            <div class="post-footer">
                                <div class="share-box">
                                    <h4>Поделиться</h4>
                                    <div class="share">
                                        <script type="text/javascript">(function() {
                                                if (window.pluso)if (typeof window.pluso.start == "function") return;
                                                if (window.ifpluso==undefined) { window.ifpluso = 1;
                                                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                                    var h=d[g]('body')[0];
                                                    h.appendChild(s);
                                                }})();</script>
                                        <div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,google"></div>
                                    </div>
                                </div>
                                <div class="tag-box">
                                    <h4>Тэги</h4>
                                    <div class="tag">
                                        <?php
                                            $exp = explode(',',$post->tag);
                                            foreach($exp as $tag){
                                                echo '<a href="/blog/tag/'.$tag.'">'.$tag.'</a>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="cat-box">
                                    <h4>Категория</h4>
                                    <div class="cat">
                                        <a href="{{url('/blog/category/'.$post->category)}}">{{$post->category}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related-post">
                            <h4>Читайте также</h4>
                            <div class="related-slider owl-carousel owl-theme">
                                        @foreach($related_posts as $related_post)
                                                <div class="post">
                                                    <div class="post-media">
                                                        <div class="image-wrap">
                                                            <a href="{{url('/blog/'.$related_post->id)}}">
                                                                <img src="{{route('file', [$related_post->filename])}}" alt="" >
                                                            </a>
                                                        </div>
                                                    </div>
                                                        <div class="post-body" >
                                                            <div class="post-meta">
                                                                <div class="date">{{$related_post->created_at}}</div>
                                                                <div class="cat">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">{{$related_post->category}}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="post-title">
                                                                <h2>
                                                                    <a href="{{url('/blog/'.$related_post->id)}}">{{$related_post->title}}</a>
                                                                </h2>
                                                            </div>
                                                            <div class="post-content">{!!$related_post->pre_text!!}</div>
                                                            <div class="post-link">
                                                                <a href="{{url('/blog/'.$related_post->id)}}" class="awe-btn awe-btn-style2">Читать</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                        @endforeach

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="page-sidebar">
                        <div class="widget widget_search">
                            <h3>Поиск</h3>
                            <form action="/blog/">
                                <input type="search" value="Поиск" name="search">
                            </form>
                        </div>
                        <div class="widget widget_follow_us">
                            <h3>Подпишись на нас</h3>
                            <div class="awe-social">
                                <a href="#">
                                    <i class="fa fa-vk" style="background: #5B7FA6"></i>
                                </a>

                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="widget widget_has_thumbnail">
                            <h3>Советы путешественникам</h3>
                            <ul>
                                @foreach($last_posts as $last_post)
                                    <li>
                                        <div class="image-wrap image-cover">
                                            <a href="{{url('/blog/'.$last_post->id)}}">
                                                <img src="{{route('file', [$last_post->filename])}}" alt="" style="width: 263px;height: 167px;"></a>
                                        </div>
                                        <div class="content">
                                            <a href="{{url('/blog/'.$last_post->id)}}">
                                                {!! $last_post->title !!}
                                            </a>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3>Популярные теги</h3>
                            <div class="tagcloud">
                                <a href="{{url('/blog/tag/Советы')}}">Советы</a>
                                <a href="{{url('/blog/tag/Туры')}}">Туры</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection