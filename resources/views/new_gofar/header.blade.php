<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gofar | Travel Agency</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" /><link rel="icon" href="{{ asset("favicon.png") }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset("styles/jquery-ui.css") }}">
    <link rel="stylesheet" href="{{ asset("styles/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("styles/idangerous.swiper.css") }}">
    <link rel="stylesheet" href="{{ asset("styles/style.css") }}" />
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- // authorize // -->
<div class="overlay"></div>
<div class="autorize-popup">
    <div class="autorize-tabs">
        <a href="#" class="autorize-tab-a current">Sign in</a>
        <a href="#" class="autorize-tab-b">Register</a>
        <a href="#" class="autorize-close"></a>
        <div class="clear"></div>
    </div>
    <section class="autorize-tab-content">
        <div class="autorize-padding">
            <h6 class="autorize-lbl">Welocome! Login in to Your Accont</h6>
            <input type="text" value="" placeholder="Name">
            <input type="text" value="" placeholder="Password">
            <footer class="autorize-bottom">
                <button class="authorize-btn">Login</button>
                <a href="#" class="authorize-forget-pass">Forgot your password?</a>
                <div class="clear"></div>
            </footer>
        </div>
    </section>
    <section class="autorize-tab-content">
        <div class="autorize-padding">
            <h6 class="autorize-lbl">Register for Your Account</h6>
            <input type="text" value="" placeholder="Name">
            <input type="text" value="" placeholder="Password">
            <footer class="autorize-bottom">
                <button class="authorize-btn">Registration</button>
                <div class="clear"></div>
            </footer>
        </div>
    </section>
</div>
<!-- \\ authorize \\-->

<header id="top">
    <div class="header-a">
        <div class="wrapper-padding">
            <div class="header-phone"><span>1 - 555 - 555 - 555</span></div>
            <div class="header-account">
                <a href="#">My account</a>
            </div>
            <div class="header-social">
                <a href="#" class="social-twitter"></a>
                <a href="#" class="social-facebook"></a>
                <a href="#" class="social-vimeo"></a>
                <a href="#" class="social-pinterest"></a>
                <a href="#" class="social-instagram"></a>
            </div>
            <div class="header-viewed">
                <a href="#" class="header-viewed-btn">recently viewed</a>
                <!-- // viewed drop // -->
                <div class="viewed-drop">
                    <div class="viewed-drop-a">
                        <!-- // -->
                        <div class="viewed-item">
                            <div class="viewed-item-l">
                                <a href="#"><img alt="" src="images/v-item-01.jpg" /></a>
                            </div>
                            <div class="viewed-item-r">
                                <div class="viewed-item-lbl"><a href="#">Andrassy Thai Hotel</a></div>
                                <div class="viewed-item-cat">location: thailand</div>
                                <div class="viewed-price">152$</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- \\ -->
                        <!-- // -->
                        <div class="viewed-item">
                            <div class="viewed-item-l">
                                <a href="#"><img alt="" src="images/v-item-02.jpg" /></a>
                            </div>
                            <div class="viewed-item-r">
                                <div class="viewed-item-lbl"><a href="#">Ermin's Hotel</a></div>
                                <div class="viewed-item-cat">location: dubai</div>
                                <div class="viewed-price">300$</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- \\ -->
                        <!-- // -->
                        <div class="viewed-item">
                            <div class="viewed-item-l">
                                <a href="#"><img alt="" src="images/v-item-03.jpg" /></a>
                            </div>
                            <div class="viewed-item-r">
                                <div class="viewed-item-lbl"><a href="#">Best Western Hotel Reither</a></div>
                                <div class="viewed-item-cat">location: berlin</div>
                                <div class="viewed-price">2300$</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- \\ -->
                    </div>
                </div>
                <!-- \\ viewed drop \\ -->
            </div>
            <div class="header-lang">
                <a href="#"><img alt="" src="images/en.gif" /></a>
                <div class="langs-drop">
                    <div><a href="#" class="langs-item en">english</a></div>
                    <div><a href="#" class="langs-item fr">francais</a></div>
                    <div><a href="#" class="langs-item de">deutsch</a></div>
                    <div><a href="#" class="langs-item it">italiano</a></div>
                </div>
            </div>
            <div class="header-curency">
                <a href="#">USD</a>
                <div class="curency-drop">
                    <div><a href="#">usd</a></div>
                    <div><a href="#">Eur</a></div>
                    <div><a href="#">GBR</a></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header-b">
        <!-- // mobile menu // -->
        <div class="mobile-menu">
            <nav>
                <ul>
                    <li><a class="has-child" href="#">HOME</a>
                        <ul>
                            <li><a href="#">Home style one</a></li>
                            <li><a href="#">Home style two</a></li>
                            <li><a href="#">Home style three</a></li>
                            <li><a href="#">Home style four</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Hotels</a>
                        <ul>
                            <li><a href="#">Hotels standard list</a></li>
                            <li><a href="#">Hotels simple style</a></li>
                            <li><a href="#">Hotels detail style</a></li>
                            <li><a href="#">Hotel item page</a></li>
                            <li><a href="#">Hotel booking page</a></li>
                            <li><a href="#">booking complete page</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Flights</a>
                        <ul>
                            <li><a href="#">Flights round trip</a></li>
                            <li><a href="#">flights one way trip</a></li>
                            <li><a href="#">flights alternative style</a></li>
                            <li><a href="#">Flights detail page</a></li>
                            <li><a href="#">Flights booking page</a></li>
                            <li><a href="#">booking complete</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Tours</a>
                        <ul>
                            <li><a href="#">Tours list style</a></li>
                            <li><a href="#">tours grid style</a></li>
                            <li><a href="#">Tours simple style</a></li>
                            <li><a href="#">Tour detail page</a></li>
                            <li><a href="#">tour booking page</a></li>
                            <li><a href="#">booking complete</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Pages</a>
                        <ul>
                            <li><a href="#">about us style one</a></li>

                            <li><a href="#">services</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Portfolio</a>
                        <ul>
                            <li><a href="#">Portfolio three columns</a></li>
                            <li><a href="#">portfolio four columns</a></li>
                            <li><a href="#">item page</a></li>
                            <li><a href="#">Item page full width style</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Blog</a>
                        <ul>
                            <li><a href="#">Blog with sidebar</a></li>
                            <li><a href="#">blog masonry style</a></li>
                            <li><a href="#">Blog post example</a></li>
                        </ul>
                    </li>
                    <li><a class="has-child" href="#">Features</a>
                        <ul>
                            <li><a href="#">typography</a></li>
                            <li><a href="#">shortcodes</a></li>
                            <li><a href="#">interactive elements</a></li>
                            <li><a href="#">cover galleries</a></li>
                            <li><a href="#">columns</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CONTACS</a></li>
                </ul>
            </nav>
        </div>
        <!-- \\ mobile menu \\ -->

        <div class="wrapper-padding">
            <div class="header-logo"><a href="#"><img alt="" src="images/logo.png" /></a></div>
            <div class="header-right">
                <div class="hdr-srch">
                    <a href="#" class="hdr-srch-btn"></a>
                </div>
                <div class="hdr-srch-overlay">
                    <div class="hdr-srch-overlay-a">
                        <input type="text" value="" placeholder="Start typing...">
                        <a href="#" class="srch-close"></a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hdr-srch-devider"></div>
                <a href="#" class="menu-btn"></a>
                <nav class="header-nav">
                    <ul>
                        <li><a href="#">Home</a>
                            <ul>
                                <li><a href="#">Home style one</a></li>
                                <li><a href="#">Home style two</a></li>
                                <li><a href="#">Home style three</a></li>
                                <li><a href="#">Home style four</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hotels</a>
                            <ul>
                                <li><a href="#">Hotels standard list</a></li>
                                <li><a href="#">Hotels simple style</a></li>
                                <li><a href="#">Hotels detail style</a></li>
                                <li><a href="#">Hotel item page</a></li>
                                <li><a href="#">Hotel booking page</a></li>
                                <li><a href="#">booking complete page</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Flights</a>
                            <ul>
                                <li><a href="#">Flights round trip</a></li>
                                <li><a href="#">flights one way trip</a></li>
                                <li><a href="#">flights alternative style</a></li>
                                <li><a href="#">Flights detail page</a></li>
                                <li><a href="#">Flights booking page</a></li>
                                <li><a href="#">booking complete</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tours</a>
                            <ul>
                                <li><a href="#">Tours list style</a></li>
                                <li><a href="#">tours grid style</a></li>
                                <li><a href="#">Tours simple style</a></li>
                                <li><a href="#">Tour detail page</a></li>
                                <li><a href="#">tour booking page</a></li>
                                <li><a href="#">booking complete</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="#">about us style one</a></li>

                                <li><a href="#">services</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Portfolio</a>
                            <ul>
                                <li><a href="#">Portfolio three columns</a></li>
                                <li><a href="#">portfolio four columns</a></li>
                                <li><a href="#">item page</a></li>
                                <li><a href="#">Item page full width style</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="#">Blog with sidebar</a></li>
                                <li><a href="#">blog masonry style</a></li>
                                <li><a href="#">Blog post example</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Features</a>
                            <ul>
                                <li><a href="#">typography</a></li>
                                <li><a href="#">shortcodes</a></li>
                                <li><a href="#">interactive elements</a></li>
                                <li><a href="#">cover galleries</a></li>
                                <li><a href="#">columns</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>