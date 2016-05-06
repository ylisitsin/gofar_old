<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sparrow | Travel Agency</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" /><link rel="icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="styles/jquery.formstyler.css">
    <link rel="stylesheet" href="styles/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body class="inner-body">
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

<!-- main-cont -->
<div class="main-cont">

    <div class="inner-page">
        <div class="inner-breadcrumbs">
            <div class="content-wrapper">
                <div class="page-title">About us</div>
                <div class="breadcrumbs">
                    <a href="#">Home</a> / <span>About us</span>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="about-content">
            <div class="content-wrapper">
                <header class="page-lbl fly-in">
                    <div class="offer-slider-lbl">about our company</div>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit</p>
                </header>
                <div class="tree-colls fly-in">
                    <div class="tree-colls-i about-text">
                        <p><span class="paragraph">Q</span>erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</p>
                    </div>
                    <div class="tree-colls-i about-text">
                        <p>doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    </div>
                    <div class="tree-colls-i about-text">
                        <div class="about-percent">
                            <label>tours - 87%</label>
                            <div data-percentage="87" class="about-percent-a"><span></span></div>
                        </div>
                        <div class="about-percent">
                            <label>work with clients - 47%</label>
                            <div data-percentage="47" class="about-percent-a"><span></span></div>
                        </div>
                        <div class="about-percent">
                            <label>hotels - 70%</label>
                            <div data-percentage="70" class="about-percent-a"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="about-us-devider fly-in"></div>

            <div class="counters fly-in">
                <div class="content-wrapper">
                    <!-- // -->
                    <div class="counters-i">
                        <b class="numscroller" data-slno='1' data-min='0' data-max='4560' data-delay='3' data-increment="15">0</b>
                        <span>tours</span>
                    </div>
                    <!-- \\ -->
                    <!-- // -->
                    <div class="counters-i">
                        <b class="numscroller" data-slno='1' data-min='0' data-max='190' data-delay='3' data-increment="2">0</b>
                        <span>happy clients</span>
                    </div>
                    <!-- \\ -->
                    <!-- // -->
                    <div class="counters-i">
                        <b class="numscroller" data-slno='1' data-min='0' data-max='842' data-delay='2' data-increment="3">0</b>
                        <span>holes reviews</span>
                    </div>
                    <!-- \\ -->
                    <!-- // -->
                    <div class="counters-i">
                        <b class="numscroller" data-slno='1' data-min='0' data-max='98' data-delay='3' data-increment="2">0</b>
                        <span>company offices</span>
                    </div>
                    <!-- \\ -->
                    <!-- // -->
                    <div class="counters-i">
                        <b class="numscroller" data-slno='1' data-min='0' data-max='452' data-delay='3' data-increment="2">0</b>
                        <span>awwards win</span>
                    </div>
                    <!-- \\ -->
                </div>
                <div class="clear"></div>
            </div>

            <div class="testimonials-flat about-ts">
                <div class="testimonials-holder fly-in">
                    <div id="testimonials-slider">
                        <!-- // -->
                        <div class="testimonials-i">
                            <div class="testimonials-a"><img alt="" src="images/testimonials-02.png" /></div>
                            <div class="testimonials-b">"Qerspeciatis unde omnis iste natus doxes sit voluptatem accusantium doloremque laudantium, totam aperiam<br />eaque ipsa quae ab illo inventore veritatis et quasi architecto"</div>
                            <div class="testimonials-c">
                                <nav>
                                    <ul>
                                        <li><a href="#"><img alt="" src="images/ts-star-a.png" /></a></li>
                                        <li><a href="#"><img alt="" src="images/ts-star-a.png" /></a></li>
                                        <li><a href="#"><img alt="" src="images/ts-star-a.png" /></a></li>
                                        <li><a href="#"><img alt="" src="images/ts-star-a.png" /></a></li>
                                        <li><a href="#"><img alt="" src="images/ts-star-a.png" /></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="testimonials-d">Albert Dowson, Company Director</div>
                        </div>
                        <!-- \\ -->
                    </div>
                </div>
            </div>

            <div class="our-team">
                <header class="page-lbl fly-in">
                    <div class="offer-slider-lbl">Our team</div>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit</p>
                </header>
                <div class="content-wrapper">

                    <div class="tree-colls three-team fly-in">
                        <div class="tree-colls-i">
                            <div class="about-percent about-photo">
                                <div class="about-photo-image">
                                    <div class="team-more-h">
                                        <div class="team-more">
                                            <div class="team-more-a">
                                                Sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim.
                                                <div class="team-more-social">
                                                    <a href="#" class="team-fb"></a>
                                                    <a href="#" class="team-tw"></a>
                                                    <a href="#" class="team-gp"></a>
                                                    <a href="#" class="team-inst"></a>
                                                    <a href="#" class="team-pint"></a>
                                                    <a href="#" class="team-vk"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img alt="" src="images/about-01.jpg">
                                </div>
                                <div class="about-photo-lbl">Mark jonson</div>
                                <div class="about-photo-sublbl">Director</div>
                            </div>
                        </div>
                        <div class="tree-colls-i">
                            <div class="about-percent about-photo">
                                <div class="about-photo-image">
                                    <div class="team-more-h">
                                        <div class="team-more">
                                            <div class="team-more-a">
                                                Sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim.
                                                <div class="team-more-social">
                                                    <a href="#" class="team-fb"></a>
                                                    <a href="#" class="team-tw"></a>
                                                    <a href="#" class="team-gp"></a>
                                                    <a href="#" class="team-inst"></a>
                                                    <a href="#" class="team-pint"></a>
                                                    <a href="#" class="team-vk"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img alt="" src="images/about-02.jpg">
                                </div>
                                <div class="about-photo-lbl">sara lee</div>
                                <div class="about-photo-sublbl">Manager</div>
                            </div>
                        </div>
                        <div class="tree-colls-i">
                            <div class="about-percent about-photo">
                                <div class="about-photo-image">
                                    <div class="team-more-h">
                                        <div class="team-more">
                                            <div class="team-more-a">
                                                Sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim.
                                                <div class="team-more-social">
                                                    <a href="#" class="team-fb"></a>
                                                    <a href="#" class="team-tw"></a>
                                                    <a href="#" class="team-gp"></a>
                                                    <a href="#" class="team-inst"></a>
                                                    <a href="#" class="team-pint"></a>
                                                    <a href="#" class="team-vk"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img alt="" src="images/about-03.jpg">
                                </div>
                                <div class="about-photo-lbl">Stiven Fox</div>
                                <div class="about-photo-sublbl">Manager</div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="about-us-devider fly-in"></div>

            <div class="why-we">
                <div class="content-wrapper">
                    <header class="page-lbl fly-in">
                        <div class="offer-slider-lbl">WHY CHOOSE US?</div>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit</p>
                    </header>

                    <div class="tree-colls fly-in">
                        <div class="tree-colls-i">
                            <div class="about-percent why-we-item">
                                <div class="why-we-img"><img alt="" src="images/why-we-01.png"></div>
                                <div class="why-we-lbl">Excellent trip planning</div>
                                <div class="why-we-txt">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui. voluptatem sequi nesciunt.</div>
                            </div>
                        </div>
                        <div class="tree-colls-i">
                            <div class="about-percent why-we-item">
                                <div class="why-we-img"><img alt="" src="images/why-we-02.png"></div>
                                <div class="why-we-lbl">Best tour pricing</div>
                                <div class="why-we-txt">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui. voluptatem sequi nesciunt.</div>
                            </div>
                        </div>
                        <div class="tree-colls-i">
                            <div class="about-percent why-we-item">
                                <div class="why-we-img"><img alt="" src="images/why-we-03.png"></div>
                                <div class="why-we-lbl">We love our clients</div>
                                <div class="why-we-txt">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui. voluptatem sequi nesciunt.</div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /main-cont -->

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
<script src="javascript/jquery.1.7.1.js"></script>
<script src="javascript/jqeury.appear.js"></script>
<script src="javascript/jquery.ui.js"></script>
<script src="javascript/script.js"></script>
<script src="javascript/bxSlider.js"></script>
<script src="javascript/viewport.js"></script>
<script src="javascript/numscroller-1.0.js"></script>
<script type="text/javascript" src="javascript/twitterfeed.js"></script>
<script>
    $(document).ready(function(){
        $('#testimonials-slider').bxSlider({
            infiniteLoop: true,
            speed: 600,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            auto: false,
            slideMargin: 0
        });
        $(function() {
            $(document.body).on('appear', '.fly-in', function(e, $affected) {
                $(this).addClass("appeared");
                $('.about-percent-a').each(function(){
                    var $value = $(this).attr('data-percentage');
                    if ( $(this).is(':in-viewport')) {
                        $(this).find('span').animate({
                            width: $value+'%'
                        },1400 );
                    }
                });
            });
            $('.fly-in').appear({force_process: true});
        });
    });
</script>
<!-- \\ scripts \\ -->

</body>
</html>