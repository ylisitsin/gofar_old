<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sparrow | Travel Agency</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" /><link rel="icon" href="favicon.png" />
    <meta content="eTravel.flights.searches.new" name="js-namespace">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="styles/jquery-ui.css">
    <link rel="stylesheet" href="styles/jquery.ui.css">
    <link rel="stylesheet" href="styles/jquery.formstyler.css">
    <link rel="stylesheet" href="styles/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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

<!-- main-cont -->
<div class="main-cont">
    <div class="body-wrapper">
        <div class="wrapper-padding">
            <div class="page-head">
                <div class="page-title" >Авиабилеты - <span>туда-обратно</span></div>
                <div class="breadcrumbs">
                    <a href="#">Главная</a> / <a href="#">Hotel</a> / <span>flight round trip</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="two-colls">
                <div class="two-colls-left">

                    <div class="srch-results-lbl fly-in">
                        <span>2,435 билетов найдено.</span>
                    </div>

                    <div class="side-block fly-in">
                        <div class="side-block-search">
                            <div class="page-search-p">
                                <!-- // -->
                                <div class="srch-tab-line">
                                    <div class="srch-tab-left">
                                        <label>Откуда</label>
                                        <div class="input-a"><input type="text" value="" placeholder="Vienna"></div>
                                    </div>
                                    <div class="srch-tab-right">
                                        <label>Куда</label>
                                        <div class="input-a"><input type="text" value="" placeholder="London"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ -->
                                <!-- // -->
                                <div class="srch-tab-line">
                                    <div class="srch-tab-left">
                                        <label>Туда</label>
                                        <div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>
                                    </div>
                                    <div class="srch-tab-right">
                                        <label>Обратно</label>
                                        <div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ -->
                                <div class="srch-tab-line no-margin-bottom">
                                    <div class="srch-tab-left transformed">
                                        <label>Пассажиров</label>
                                        <div class="select-wrapper">
                                            <select class="custom-select">
                                                <option>--</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="srch-tab-right transformed">
                                        <label>Класс</label>
                                        <div class="select-wrapper">
                                            <select class="custom-select">
                                                <option>--</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ -->

                                <button class="srch-btn">Поиск</button>
                            </div>

                        </div>
                    </div>

                    <!-- // side // -->
                    <div class="side-block fly-in">
                        <div class="side-price">
                            <div class="side-padding">
                                <div class="side-lbl">Цена</div>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                </div>
                                <div class="price-ammounts">
                                    <input type="text" id="ammount-from" readonly>
                                    <input type="text" id="ammount-to" readonly>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- \\ side \\ -->

                    <!-- // side // -->
                    <div class="side-block fly-in">
                        <div class="side-stars">
                            <div class="side-padding">
                                <div class="side-lbl">Airlines</div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Lufthansa (30)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        United Airlines (18)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Air berlin (8)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Swiss (2)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Turkish Airlines (1)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Air france (1)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- \\ side \\ -->
                    <!-- // side // -->
                    <div class="side-block fly-in">
                        <div class="side-stars">
                            <div class="side-padding">
                                <div class="side-lbl">Flight type</div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Business
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        First class
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />
                                        Economy
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- \\ side \\ -->
                    <!-- // side // -->
                    <div class="side-block fly-in">
                        <div class="side-stars">
                            <div class="side-padding">
                                <div class="side-lbl">Flight times</div>

                                <div class="side-time-holder">
                                    <div class="side-lbl-a">Departure flight</div>
                                    <div class="side-time">
                                        <div class="time-ammounts">
                                            departure time <span class="time-from">0</span>:00 up to <span class="time-to">0</span>:00
                                        </div>
                                        <div class="time-ranger">
                                            <div class="time-range"></div>
                                        </div>
                                    </div>
                                    <div class="side-time">
                                        <div class="time-ammounts">
                                            arrival time <span class="time-from">0</span>:00 up to <span class="time-to">0</span>:00
                                        </div>
                                        <div class="time-ranger">
                                            <div class="time-range"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-time-holder">
                                    <div class="side-lbl-a">return flight</div>
                                    <div class="side-time">
                                        <div class="time-ammounts">
                                            departure time <span class="time-from">0</span>:00 up to <span class="time-to">0</span>:00
                                        </div>
                                        <div class="time-ranger">
                                            <div class="time-range"></div>
                                        </div>
                                    </div>
                                    <div class="side-time">
                                        <div class="time-ammounts">
                                            arrival time <span class="time-from">0</span>:00 up to <span class="time-to">0</span>:00
                                        </div>
                                        <div class="time-ranger">
                                            <div class="time-range"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- \\ side \\ -->

                </div>
                <div class="two-colls-right">
                    <div class="two-colls-right-b">
                        <div class="padding">

                            <div class="catalog-head fly-in">
                                <label>Сортировать по:</label>
                                <div class="search-select">
                                    <select>
                                        <option>Name</option>
                                        <option>Name</option>
                                        <option>Name</option>
                                        <option>Name</option>
                                        <option>Name</option>
                                    </select>
                                </div>
                                <div class="search-select">
                                    <select>
                                        <option>Price</option>
                                        <option>Price</option>
                                        <option>Price</option>
                                        <option>Price</option>
                                        <option>Price</option>
                                    </select>
                                </div>
                                <div class="search-select">
                                    <select>
                                        <option>Duration</option>
                                        <option>Duration</option>
                                        <option>Duration</option>
                                        <option>Duration</option>
                                        <option>Duration</option>
                                    </select>
                                </div>
                                <a href="#" class="show-list"></a>

                                <div class="clear"></div>
                            </div>

                            <div class="catalog-row">
                                <!-- // flight-item // -->
                                <div class="flight-item fly-in">
                                    <div class="flt-i-a">
                                        <div class="flt-i-b">

                                            <div class="flt-i-bb">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">Туда</div>
                                                        <div class="company"><img alt="" src="images/flyght-01.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">Вт 06-01 Нью-Йорк - Вена</div>
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>Вылет</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>Посадка</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>Длительность</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>Детали</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Вт 06-01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">США</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Вт 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Австрия</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Эконом<br>
                                                                            Перевозщик austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                            <div class="flt-i-bb flight-return">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">return</div>
                                                        <div class="company"><img alt="" src="images/flyght-01.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>

                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>15:30</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>19:40</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->

                                                                <!-- \\ -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>20:10</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>02:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                        </div>
                                    </div>
                                    <div class="flt-i-c">
                                        <div class="flt-i-padding">
                                            <div class="flt-i-price">634.24$</div>
                                            <div class="flt-i-price-b">avg/person</div>
                                            <a href="#" class="cat-list-btn">select now</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ flight-item \\ -->

                                <!-- // flight-item // -->
                                <div class="flight-item fly-in">
                                    <div class="flt-i-a">
                                        <div class="flt-i-b">

                                            <div class="flt-i-bb">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">departure</div>
                                                        <div class="company"><img alt="" src="images/flyght-02.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio2" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio2" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                            <div class="flt-i-bb flight-return">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">return</div>
                                                        <div class="company"><img alt="" src="images/flyght-02.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>

                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio2-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>15:30</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>19:40</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->

                                                                <!-- \\ -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio2-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>20:10</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>02:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                        </div>
                                    </div>
                                    <div class="flt-i-c">
                                        <div class="flt-i-padding">
                                            <div class="flt-i-price">950.98$</div>
                                            <div class="flt-i-price-b">avg/person</div>
                                            <a href="#" class="cat-list-btn">select now</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ flight-item \\ -->

                                <!-- // flight-item // -->
                                <div class="flight-item fly-in">
                                    <div class="flt-i-a">
                                        <div class="flt-i-b">

                                            <div class="flt-i-bb">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">departure</div>
                                                        <div class="company"><img alt="" src="images/flyght-03.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio3" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio3" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio3" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                            <div class="flt-i-bb flight-return">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">return</div>
                                                        <div class="company"><img alt="" src="images/flyght-03.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>

                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio3-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>15:30</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>19:40</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->

                                                                <!-- \\ -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio3-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>20:10</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>02:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                        </div>
                                    </div>
                                    <div class="flt-i-c">
                                        <div class="flt-i-padding">
                                            <div class="flt-i-price">950.98$</div>
                                            <div class="flt-i-price-b">avg/person</div>
                                            <a href="#" class="cat-list-btn">select now</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ flight-item \\ -->

                                <!-- // flight-item // -->
                                <div class="flight-item fly-in">
                                    <div class="flt-i-a">
                                        <div class="flt-i-b">

                                            <div class="flt-i-bb">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">departure</div>
                                                        <div class="company"><img alt="" src="images/flyght-04.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio4" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio4" type="radio" /></label> </div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>14:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>17:50</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                            <div class="flt-i-bb flight-return">
                                                <div class="flt-l-a">
                                                    <div class="flt-l-b">
                                                        <div class="way-lbl">return</div>
                                                        <div class="company"><img alt="" src="images/flyght-04.png"></div>
                                                    </div>
                                                    <div class="flt-l-c">
                                                        <div class="flt-l-cb">
                                                            <div class="flt-l-c-padding">
                                                                <div class="flyght-info-head">TUE 06/01 New York - Viena</div>

                                                                <!-- // -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio4-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>15:30</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>19:40</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->

                                                                <!-- \\ -->
                                                                <div class="flight-line">
                                                                    <div class="flight-radio"><label><input name="radio4-a" type="radio" /></label></div>
                                                                    <div class="flight-line-a">
                                                                        <b>departure</b>
                                                                        <span>20:10</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>arrival</b>
                                                                        <span>02:12</span>
                                                                    </div>
                                                                    <div class="flight-line-d"></div>
                                                                    <div class="flight-line-a">
                                                                        <b>time</b>
                                                                        <span>14H 50M</span>
                                                                    </div>
                                                                    <div class="flight-line-b">
                                                                        <b>details</b>
                                                                        <span>Only 2 seats!</span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <!-- // details // -->
                                                                    <div class="flight-details">
                                                                        <div class="flight-details-l">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">12:40 John F Kennedy (JFK)</div>
                                                                            <div class="flight-details-c">USA</div>
                                                                        </div>
                                                                        <div class="flight-details-r">
                                                                            <div class="flight-details-a">Tue 06/01</div>
                                                                            <div class="flight-details-b">16:30 Vienna Intl (VIE)</div>
                                                                            <div class="flight-details-c">Austria</div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="flight-details-d">
                                                                            Flight LO-98 Boeing 787-8 (jet) Economy<br>
                                                                            Operated by austrian airlines
                                                                        </div>
                                                                    </div>
                                                                    <!-- \\ details \\ -->
                                                                </div>
                                                                <!-- \\ -->
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <br class="clear" />

                                        </div>
                                    </div>
                                    <div class="flt-i-c">
                                        <div class="flt-i-padding">
                                            <div class="flt-i-price">950.98$</div>
                                            <div class="flt-i-price-b">avg/person</div>
                                            <a href="#" class="cat-list-btn">select now</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- \\ flight-item \\ -->

                            </div>

                            <div class="clear"></div>

                            <div class="pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
            <div class="clear"></div>

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
<script src="javascript/script.js"></script>
<script src="javascript/jquery.formstyler.js"></script>
<script src="javascript/custom.select.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script type="text/javascript" src="javascript/twitterfeed.js"></script>
<script>

    $(document).ready(function(){
        $('.date-inpt').datepicker();
        $('.custom-select').customSelect();
        (function($) {
            $(function() {
                $('input:checkbox,input:radio,.search-engine-range-selection-container input:radio').styler();
            })
        })(jQuery);
        $(function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 1500,
                values: [ 275, 1100 ],
                slide: function( event, ui ) {
                    $("#ammount-from").val(ui.values[0]+'$');
                    $("#ammount-to").val(ui.values[1]+'$');
                }
            });
            $("#ammount-from").val($("#slider-range").slider("values",0)+'$');
            $("#ammount-to").val($("#slider-range").slider("values",1)+'$');
        });



        $(".side-time").each(function(){
            var $this = $(this);
            $this.find('.time-range').slider({
                range: true,
                min: 0,
                max: 24,
                values: [ 3, 20 ],
                slide: function( event, ui ) {
                    $this.find(".time-from").text(ui.values[0]);
                    $this.find(".time-to").text(ui.values[1]);
                }
            });

            $(this).find(".time-from").text($this.find(".time-range").slider("values",0));
            $(this).find(".time-to").text($this.find(".time-range").slider("values",1));

        });

        $(function() {
            $(document.body).on('appear', '.fly-in', function(e, $affected) {
                $(this).addClass("appeared");
            });
            $('.fly-in').appear({force_process: true});
        });
    });
</script>
<!-- \\ scripts \\ -->

</body>
</html> 