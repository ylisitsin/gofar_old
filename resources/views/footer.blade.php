<footer id="footer-page">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget widget_contact_info">
                    <div class="widget_background">
                        <div class="widget_background__half">
                            <div class="bg"></div>
                        </div>
                        <div class="widget_background__half">
                            <div class="bg"></div>
                        </div>
                    </div>
                    <div class="logo">
                        <img src="{{ asset("images/logo-footer.png") }}" alt=""></div>
                    <div class="widget_content">
                        <p><!--Республика Беларусь, г.Минск, ул.Якуба Коласа --></p>
                        <p>+375 33 341 60 52</p>
                        <a href="#">support@gofar.by</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget widget_about_us">
                    <h3>О нас</h3>
                    <div class="widget_content">
                        <p>
                            Gofar.by – это туристический сайт, который быстро и просто проводит поиск дешёвых авиабилетов  и отелей одновременно по всем сайтам авиакомпаний и агентств. Экономьте своё время и деньги, путешествуйте самостоятельно с Gofar.by!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget widget_categories">
                    <h3>Пользователям</h3>
                    <ul>
                        <li>
                            <a href="{{url('/page/works')}}">Как мы работаем</a>
                        </li>
                        <li>
                            <a href="{{url('/page/faq')}}">Вопрос-ответ</a>
                        </li>
                        <li>
                            <a href="{{url('/page/privacy')}}">Конфиденциальность</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget widget_recent_entries">
                    <h3>Партнерам</h3>
                    <ul>
                        <li>
                            <a href="{{url('/page/advertising')}}">Размещение рекламы</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget widget_follow_us">
                    <div class="widget_content">
                        <p>По вопросам сотрудничества</p>
                        <span class="phone">+375 29 573-51-73</span>
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
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>©2015 GOFAR.by™ Все права защищены. УНП 691720524</p>
        </div>
    </div>
</footer>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 363px; top: 216px; left: 493px; max-height: 300px; z-index: 9999;"></div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33414048 = new Ya.Metrika({
                    id:33414048,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";;

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33414048"; style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69722723-1', 'auto');
    ga('send', 'pageview');

</script>
</div>
<script type="text/javascript" src="{{ asset("javascript/jquery-1.11.2.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.scrollTo.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/moment.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/accounting.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/masonry.pkgd.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.parallax-1.1.3.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.owl.carousel.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/theia-sticky-sidebar.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.magnific-popup.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery-ui.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/scripts.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.themepunch.revolution.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.themepunch.tools.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.autocomplete.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/jquery.validate.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("panel/js/plugins/bootstrap/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("panel/js/plugins/bootstrap-select/bootstrap-select.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/main.js") }}"></script>
@if (Request::is("avia/*"))
    <script type="text/javascript" src="{{ asset("javascript/jquery.scrollTo.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("javascript/parser_avia_new.js") }}"></script>
@endif
@if (Request::is("hotel/*"))
    <script type="text/javascript" src="{{ asset("javascript/jquery.scrollTo.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("javascript/parser_hotel.js") }}"></script>
@endif
<script type="text/javascript" src="{{ asset("javascript/search_trip.js") }}"></script>

<script type="text/javascript">if($('#slider-revolution').length) {
        $('#slider-revolution').show().revolution({
            ottedOverlay:"none",
            delay:10000,
            startwidth:1600,
            startheight:650,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,


            simplifyAll:"off",

            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",

            touchenabled:"on",
            onHoverStop:"on",
            nextSlideOnWindowFocus:"off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],


            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner2",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",



            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0
        });
    }</script>
</body>
</html>