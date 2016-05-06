</body>
<footer class="footer-a">
    <div class="wrapper-padding">
        <div class="section">
            <div class="footer-lbl">Get In Touch</div>
            <div class="footer-adress">Address: 58911 Lepzig Hore,<br />85000 Vienna, Austria</div>
            <div class="footer-phones">Telephones: +1 777 55-32-21</div>
            <div class="footer-email">E-mail: contacts@miracle.com</div>
            <div class="footer-skype">Skype: angelotours</div>
        </div>
        <div class="section">
            <div class="footer-lbl">Featured deals</div>
            <div class="footer-tours">
                <!-- // -->
                <div class="footer-tour">
                    <div class="footer-tour-l"><a href="#"><img alt="" src="images/f-tour-01.jpg" /></a></div>
                    <div class="footer-tour-r">
                        <div class="footer-tour-a">amsterdam tour</div>
                        <div class="footer-tour-b">location: netherlands</div>
                        <div class="footer-tour-c">800$</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- \\ -->
                <!-- // -->
                <div class="footer-tour">
                    <div class="footer-tour-l"><a href="#"><img alt="" src="images/f-tour-02.jpg" /></a></div>
                    <div class="footer-tour-r">
                        <div class="footer-tour-a">Kiev tour</div>
                        <div class="footer-tour-b">location: ukraine</div>
                        <div class="footer-tour-c">550$</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- \\ -->
                <!-- // -->
                <div class="footer-tour">
                    <div class="footer-tour-l"><a href="#"><img alt="" src="images/f-tour-03.jpg" /></a></div>
                    <div class="footer-tour-r">
                        <div class="footer-tour-a">vienna tour</div>
                        <div class="footer-tour-b">location: austria</div>
                        <div class="footer-tour-c">940$</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- \\ -->
            </div>
        </div>
        <div class="section">
            <div class="footer-lbl">Twitter widget</div>
            <div class="twitter-wiget">
                <div id="twitter-feed"></div>
            </div>
        </div>
        <div class="section">
            <div class="footer-lbl">newsletter sign up</div>
            <div class="footer-subscribe">
                <div class="footer-subscribe-a">
                    <input type="text" placeholder="you email" value="" />
                </div>
            </div>
            <button class="footer-subscribe-btn">Sign up</button>
        </div>
    </div>
    <div class="clear"></div>
</footer>

<footer class="footer-b">
    <div class="wrapper-padding">
        <div class="footer-left">© Copyright 2015 by weblionmedia. All rights reserved.</div>
        <div class="footer-social">
            <a href="#" class="footer-twitter"></a>
            <a href="#" class="footer-facebook"></a>
            <a href="#" class="footer-vimeo"></a>
            <a href="#" class="footer-pinterest"></a>
            <a href="#" class="footer-instagram"></a>
        </div>
        <div class="clear"></div>
    </div>
</footer>

<!-- // scripts // -->
<script src="{{ asset("javascript/jquery.1.7.1.js") }}"></script>
<script src="{{ asset("javascript/idangerous.swiper.js") }}"></script>
<script src="{{ asset("javascript/slideInit.js") }}"></script>
<script src="{{ asset("javascript/owl.carousel.min.js") }}"></script>
<script src="{{ asset("javascript/bxSlider.js") }}"></script>
<script src="{{ asset("javascript/jqeury.appear.js") }}"></script>
<script src="{{ asset("javascript/script.js") }}"></script>
<script src="{{ asset("javascript/custom.select.js") }}"></script>
<script src="{{ asset("javascript/jquery-ui.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("javascript/twitterfeed.js") }}"></script>
<script>
    $(document).ready(function(){
        $('.date-inpt').datepicker();
        $('.custom-select').customSelect();
        $slideHover();
        $(function() {
            $(document.body).on('appear', '.fly-in', function(e, $affected) {
                $(this).addClass("appeared");
            });
            $('.fly-in').appear({force_process: true});
        });

        $('#testimonials-slider').bxSlider({
            infiniteLoop: true,
            speed: 600,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            auto: false,
            slideMargin: 0
        });

        $(".owl-slider").owlCarousel({
            loop:true,
            margin:28,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                620:{
                    items:2,
                    nav:true
                },
                900:{
                    items:3,
                    nav:false
                },
                1120:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        });

        $slideHover();

    });
</script>
<!-- \\ scripts \\ -->

</body>
</html>
</html>