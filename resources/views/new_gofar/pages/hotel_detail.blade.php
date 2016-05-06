<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sparrow | Travel Agency</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" /><link rel="icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="styles/jquery-ui.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="javascript/js"></script>

    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mylat = '52.569334';
            var mylong ='13.380216';
            var mapOptions = {
                zoom: 13,
                disableDefaultUI: true,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.LARGE,
                    position: google.maps.ControlPosition.LEFT_CENTER
                },
                center: new google.maps.LatLng(mylat, mylong), // New York
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            google.maps.event.addDomListener(window, 'resize', init);

            google.maps.event.addListenerOnce(map, 'idle', function(){
                setTimeout( function() {
                    var place = new google.maps.LatLng(52.569334, 13.380216);
                    var image = new google.maps.MarkerImage('img/map.png',
                            new google.maps.Size(19, 29),
                            new google.maps.Point(0,0),
                            new google.maps.Point(0, 32));
                    var marker = new google.maps.Marker({
                        map:map,
                        icon: image,
                        draggable:false,
                        animation: google.maps.Animation.DROP,
                        position: place
                    });
                    $('.map-contacts').each(function(index){
                        $(this).delay(141*index).fadeIn();
                    });
                } , 500);
            });
        }

    </script>
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
                <div class="page-title">Hotels - <span>Detail</span></div>
                <div class="breadcrumbs">
                    <a href="#">Home</a> / <a href="#">Hotel</a> / <span>Detail</span>
                </div>
                <div class="clear"></div>
            </div>

            <div class="sp-page">


                <div class="sp-page-a">
                    <div class="sp-page-l">
                        <div class="sp-page-lb">
                            <div class="sp-page-p">
                                <div class="h-tabs">
                                    <div class="h-tabs-left">
                                        <div class="h-tab-i active">
                                            <a href="#" class="h-tab-item-01">
                                                <i></i>
                                                <span>photos</span>
                                                <span class="clear"></span>
                                            </a>
                                        </div>
                                        <div class="h-tab-i">
                                            <a href="#" class="h-tab-item-02 initMap">
                                                <i></i>
                                                <span>map</span>
                                                <span class="clear"></span>
                                            </a>
                                        </div>
                                        <div class="h-tab-i">
                                            <a href="#" class="h-tab-item-03">
                                                <i></i>
                                                <span>calendar</span>
                                                <span class="clear"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="h-tabs-right">
                                        <a href="#">
                                            <i></i>
                                            <span>more hotels</span>
                                            <div class="clear"></div>
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="mm-tabs-wrapper">
                                    <!-- // tab item // -->
                                    <div class="tab-item">
                                        <div class="tab-gallery-big">
                                            <img alt="" src="images/tab-photo-01.jpg">
                                        </div>
                                        <div class="tab-gallery-preview">
                                            <div id="gallery">
                                                <!-- // -->
                                                <div class="gallery-i active">
                                                    <a href="#"><img alt="" src="images/tabgall-prev-01.jpg"><span></span></a>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="gallery-i">
                                                    <a href="#"><img alt="" src="images/tabgall-prev-02.jpg"><span></span></a>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="gallery-i">
                                                    <a href="#"><img alt="" src="images/tabgall-prev-03.jpg"><span></span></a>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="gallery-i">
                                                    <a href="#"><img alt="" src="images/tabgall-prev-04.jpg"><span></span></a>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="gallery-i">
                                                    <a href="#"><img alt="" src="images/tabgall-prev-05.jpg"><span></span></a>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="gallery-i">
                                                    <a href="#"><img alt="" src="images/tabgall-prev-06.jpg"><span></span></a>
                                                </div>
                                                <!-- \\ -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- \\ tab item \\ -->
                                    <!-- // tab item // -->
                                    <div class="tab-item">
                                        <div id="preloader">
                                            <div id="spinner"></div>
                                        </div>
                                        <div class="tab-map">
                                            <div class="contact-map">
                                                <div id="map"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- \\ tab item \\ -->
                                    <!-- // tab item // -->
                                    <div class="tab-item">
                                        <div class="calendar-tab">
                                            <div class="calendar-tab-select">
                                                <label>Select month</label>
                                                <select class="custom-select">
                                                    <option>january 2015</option>
                                                    <option>january 2015</option>
                                                    <option>january 2015</option>
                                                </select>
                                            </div>


                                            <div class="tab-calendar-colls">
                                                <div class="tab-calendar-collsl">
                                                    <div class="tab-calendar-collslb">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td>sun</td>
                                                                <td>mon</td>
                                                                <td>tue</td>
                                                                <td>wed</td>
                                                                <td>thu</td>
                                                                <td>fri</td>
                                                                <td>sat</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="date-passed"><span><label></label></span></td>
                                                                <td class="date-passed"><span><label></label></span></td>
                                                                <td class="date-passed"><span><label></label></span></td>
                                                                <td><span><label>1</label></span></td>
                                                                <td><span><label>2</label></span></td>
                                                                <td><span><label>3</label></span></td>
                                                                <td><span><label>4</label></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span><label>5</label></span></td>
                                                                <td><span><label>6</label></span></td>
                                                                <td><span><label>7</label></span></td>
                                                                <td><span><label>8</label></span></td>
                                                                <td><span><label>9</label></span></td>
                                                                <td><span><label>10</label></span></td>
                                                                <td><span><label>11</label></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span><label>12</label></span></td>
                                                                <td><span><label>13</label></span></td>
                                                                <td><span><label>14</label></span></td>
                                                                <td><span><label>15</label></span></td>
                                                                <td><span><label>16</label></span></td>
                                                                <td><span><label>17</label></span></td>
                                                                <td><span><label>18</label></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span><label>19</label></span></td>
                                                                <td><span><label>20</label></span></td>
                                                                <td><span><label>21</label></span></td>
                                                                <td><span><label>22</label></span></td>
                                                                <td><span><label>23</label></span></td>
                                                                <td><span><label>24</label></span></td>
                                                                <td><span><label>25</label></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span><label>26</label></span></td>
                                                                <td class="date-available"><span><label>27</label></span></td>
                                                                <td class="date-available"><span><label>28</label></span></td>
                                                                <td class="date-available"><span><label>29</label></span></td>
                                                                <td class="date-unavailable"><span><label>30</label></span></td>
                                                                <td class="date-unavailable"><span><label>31</label></span></td>
                                                                <td class="date-passed"><span><label></label></span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="tab-calendar-collsr">
                                                <div class="tab-calendar-s">

                                                    <div class="map-symbol passed">
                                                        <div class="map-symbol-l"></div>
                                                        <div class="map-symbol-r">Date past</div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="map-symbol available">
                                                        <div class="map-symbol-l"></div>
                                                        <div class="map-symbol-r">available</div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="map-symbol unavailable">
                                                        <div class="map-symbol-l"></div>
                                                        <div class="map-symbol-r">unavailable</div>
                                                        <div class="clear"></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="clear"></div>

                                        </div>
                                    </div>
                                    <!-- \\ tab item \\ -->

                                </div>

                                <div class="content-tabs">
                                    <div class="content-tabs-head last-item">
                                        <nav>
                                            <ul>
                                                <li><a class="active" href="#">DESCRIPTION</a></li>
                                                <li><a href="#">AVAILABILITY</a></li>
                                                <li><a href="#">Preferences</a></li>
                                                <li><a href="#">reviews</a></li>
                                                <li><a href="#">THINGS TO DO</a></li>
                                                <li><a href="#" class="tabs-lamp"></a></li>
                                            </ul>
                                        </nav>

                                        <div class="clear"></div>
                                    </div>
                                    <div class="content-tabs-body">
                                        <!-- // content-tabs-i // -->
                                        <div class="content-tabs-i">
                                            <h2>Hotel Description</h2>
                                            <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui. voluptatem sequi nesciunt. Neque porro quisqua. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                            <div class="tab-reasons">
                                                <h2>4 Reasons to Choose Andrassy Rhai Hotel</h2>
                                                <div class="tab-reasons-h">
                                                    <!-- // -->
                                                    <div class="tab-reasons-i reasons-01">
                                                        <b>fully responsive</b>
                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                                    </div>
                                                    <!-- \\ -->
                                                    <!-- // -->
                                                    <div class="tab-reasons-i reasons-02">
                                                        <b>757 verified reviews</b>
                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                                    </div>
                                                    <!-- \\ -->
                                                    <!-- // -->
                                                    <div class="tab-reasons-i reasons-03">
                                                        <b>Manage your bookings online</b>
                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                                    </div>
                                                    <!-- \\ -->
                                                    <!-- // -->
                                                    <div class="tab-reasons-i reasons-04">
                                                        <b>Booking is safe</b>
                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                                    </div>
                                                    <!-- \\ -->
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="facilities">
                                                    <h2>Facilities of Hotel</h2>
                                                    <table>
                                                        <tr>
                                                            <td class="facilities-a">Food & Drink</td>
                                                            <td class="facilities-b">Breakfast in the Room</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="facilities-a">Internet</td>
                                                            <td class="facilities-b"><span class="facility-label">Free! WiFi is available in all areas and is free of charge.</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="facilities-a">Parking</td>
                                                            <td class="facilities-b">Vending Machine (drinks), 24-Hour Front Desk, Express Check-in/Check-out</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="facilities-a">Languages</td>
                                                            <td class="facilities-b">Italian, French, Spanish, English, Arabic</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- \\ content-tabs-i \\ -->
                                        <!-- // content-tabs-i // -->
                                        <div class="content-tabs-i">
                                            <h2>Your Travel Rates</h2>
                                            <div class="rates-search">
                                                <div class="rates-line">
                                                    <!-- // -->
                                                    <div class="srch-tab-line">
                                                        <div class="srch-tab-left">
                                                            <label>Check in</label>
                                                            <div class="input-a"><input type="text" value="" placeholder="MM/DD/YY"></div>
                                                        </div>
                                                        <div class="srch-tab-right">
                                                            <label>Check out</label>
                                                            <div class="input-a"><input type="text" value="" placeholder="MM/DD/YY"></div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <!-- \\ -->
                                                </div>

                                                <div class="rates-line-right">
                                                    <!-- // -->
                                                    <div class="srch-tab-line no-margin-bottom">
                                                        <div class="srch-tab-3c">
                                                            <label>Rooms</label>
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
                                                        <div class="srch-tab-3c">
                                                            <label>adult</label>
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
                                                        <div class="srch-tab-3c">
                                                            <label>Child</label>
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

                                                </div>
                                                <button class="rates-srch"></button>


                                                <div class="clear"></div>

                                                <div class="rates-devider"></div>

                                                <h2>Room Type</h2>

                                                <div class="available-row">

                                                    <!-- // -->
                                                    <div class="cat-list-item">
                                                        <div class="cat-list-item-l">
                                                            <a href="#"><img alt="" src="images/available-01.jpg"></a>
                                                        </div>
                                                        <div class="cat-list-item-r">
                                                            <div class="cat-list-item-rb">
                                                                <div class="cat-list-item-p">
                                                                    <div class="cat-list-content">
                                                                        <div class="cat-list-content-a">
                                                                            <div class="cat-list-content-l">
                                                                                <div class="cat-list-content-lb">
                                                                                    <div class="cat-list-content-lpadding">
                                                                                        <div class="offer-slider-link"><a href="#">Single Room</a></div>
                                                                                        <div class="offer-slider-location">Max Occupancy: 2 persons</div>
                                                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                                                                        <div class="cat-icons">
                                                                                            <span class="cat-icon-01 active"></span>
                                                                                            <span class="cat-icon-02"></span>
                                                                                            <span class="cat-icon-03"></span>
                                                                                            <span class="cat-icon-04"></span>
                                                                                            <span class="cat-icon-05"></span>
                                                                                            <span class="cat-icon-06"></span>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br class="clear">
                                                                            </div>
                                                                        </div>
                                                                        <div class="cat-list-content-r">
                                                                            <div class="cat-list-content-p">
                                                                                <div class="available-price">634$</div>
                                                                                <div class="available-price-a">avg/night</div>
                                                                                <div class="available-price-c">9 available</div>
                                                                                <a href="#" class="available-btn">select</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br class="clear">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <!-- \\ -->
                                                    <!-- // -->
                                                    <div class="cat-list-item">
                                                        <div class="cat-list-item-l">
                                                            <a href="#"><img alt="" src="images/available-02.jpg"></a>
                                                        </div>
                                                        <div class="cat-list-item-r">
                                                            <div class="cat-list-item-rb">
                                                                <div class="cat-list-item-p">
                                                                    <div class="cat-list-content">
                                                                        <div class="cat-list-content-a">
                                                                            <div class="cat-list-content-l">
                                                                                <div class="cat-list-content-lb">
                                                                                    <div class="cat-list-content-lpadding">
                                                                                        <div class="offer-slider-link"><a href="#">Double Room</a></div>
                                                                                        <div class="offer-slider-location">Max Occupancy: 2 persons</div>
                                                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                                                                        <div class="cat-icons">
                                                                                            <span class="cat-icon-01 active"></span>
                                                                                            <span class="cat-icon-02"></span>
                                                                                            <span class="cat-icon-03"></span>
                                                                                            <span class="cat-icon-04"></span>
                                                                                            <span class="cat-icon-05"></span>
                                                                                            <span class="cat-icon-06"></span>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br class="clear">
                                                                            </div>
                                                                        </div>
                                                                        <div class="cat-list-content-r">
                                                                            <div class="cat-list-content-p">
                                                                                <div class="available-price">450$</div>
                                                                                <div class="available-price-a">avg/night</div>
                                                                                <div class="available-price-c">9 available</div>
                                                                                <a href="#" class="available-btn">select</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br class="clear">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <!-- \\ -->
                                                    <!-- // -->
                                                    <div class="cat-list-item">
                                                        <div class="cat-list-item-l">
                                                            <a href="#"><img alt="" src="images/available-03.jpg"></a>
                                                        </div>
                                                        <div class="cat-list-item-r">
                                                            <div class="cat-list-item-rb">
                                                                <div class="cat-list-item-p">
                                                                    <div class="cat-list-content">
                                                                        <div class="cat-list-content-a">
                                                                            <div class="cat-list-content-l">
                                                                                <div class="cat-list-content-lb">
                                                                                    <div class="cat-list-content-lpadding">
                                                                                        <div class="offer-slider-link"><a href="#">Twin Room</a></div>
                                                                                        <div class="offer-slider-location">Max Occupancy: 2 persons</div>
                                                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                                                                        <div class="cat-icons">
                                                                                            <span class="cat-icon-01 active"></span>
                                                                                            <span class="cat-icon-02"></span>
                                                                                            <span class="cat-icon-03"></span>
                                                                                            <span class="cat-icon-04"></span>
                                                                                            <span class="cat-icon-05"></span>
                                                                                            <span class="cat-icon-06"></span>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br class="clear">
                                                                            </div>
                                                                        </div>
                                                                        <div class="cat-list-content-r">
                                                                            <div class="cat-list-content-p">
                                                                                <div class="available-price">380$</div>
                                                                                <div class="available-price-a">avg/night</div>
                                                                                <div class="available-price-c">9 available</div>
                                                                                <a href="#" class="available-btn">select</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br class="clear">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <!-- \\ -->
                                                    <!-- // -->
                                                    <div class="cat-list-item">
                                                        <div class="cat-list-item-l">
                                                            <a href="#"><img alt="" src="images/available-04.jpg"></a>
                                                        </div>
                                                        <div class="cat-list-item-r">
                                                            <div class="cat-list-item-rb">
                                                                <div class="cat-list-item-p">
                                                                    <div class="cat-list-content">
                                                                        <div class="cat-list-content-a">
                                                                            <div class="cat-list-content-l">
                                                                                <div class="cat-list-content-lb">
                                                                                    <div class="cat-list-content-lpadding">
                                                                                        <div class="offer-slider-link"><a href="#">Family Suite</a></div>
                                                                                        <div class="offer-slider-location">Max Occupancy: 2 persons</div>
                                                                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                                                                        <div class="cat-icons">
                                                                                            <span class="cat-icon-01 active"></span>
                                                                                            <span class="cat-icon-02"></span>
                                                                                            <span class="cat-icon-03"></span>
                                                                                            <span class="cat-icon-04"></span>
                                                                                            <span class="cat-icon-05"></span>
                                                                                            <span class="cat-icon-06"></span>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br class="clear">
                                                                            </div>
                                                                        </div>
                                                                        <div class="cat-list-content-r">
                                                                            <div class="cat-list-content-p">
                                                                                <div class="available-price">540$</div>
                                                                                <div class="available-price-a">avg/night</div>
                                                                                <div class="available-price-c">9 available</div>
                                                                                <a href="#" class="available-btn">select</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br class="clear">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <!-- \\ -->
                                                    <a href="#" class="availabe-more">load more results</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- \\ content-tabs-i \\ -->
                                        <!-- // content-tabs-i // -->
                                        <div class="content-tabs-i">
                                            <h2>Hotel Facilities</h2>
                                            <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. </p>
                                            <ul class="preferences-list">
                                                <li class="internet">High-speed Internet</li>
                                                <li class="conf-room">Conference room</li>
                                                <li class="play-place">Play Place</li>
                                                <li class="restourant">Restourant</li>
                                                <li class="bar">Bar</li>
                                                <li class="doorman">Doorman</li>
                                                <li class="kitchen">Kitchen</li>
                                                <li class="spa">Spa services</li>
                                                <li class="bike">Bike Rental</li>
                                                <li class="entertaiment">Entertaiment</li>
                                                <li class="hot-tub">Hot Tub</li>
                                                <li class="pool">Swimming Pool</li>
                                                <li class="parking">Free parking</li>
                                                <li class="gym">Gym</li>
                                                <li class="tv">TV</li>
                                                <li class="pets">Pets allowed</li>
                                                <li class="handicap">Handicap</li>
                                                <li class="secure">Secure </li>
                                            </ul>
                                            <div class="clear"></div>
                                            <div class="preferences-devider"></div>
                                            <h2>Alternative Style</h2>
                                            <p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt eque porro quisqua.</p>
                                            <ul class="preferences-list-alt">
                                                <li class="internet">High-speed Internet</li>
                                                <li class="parking">Free parking</li>
                                                <li class="gym">Gym</li>
                                                <li class="restourant">Restourant</li>
                                                <li class="pets">Pets allowed</li>
                                                <li class="pool">Swimming Pool</li>
                                                <li class="kitchen">Kitchen</li>
                                                <li class="conf-room">Conference room</li>
                                                <li class="bike">Bike Rental</li>
                                                <li class="entertaiment">Entertaiment</li>
                                                <li class="bar">Bar</li>
                                                <li class="secure">Secure</li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <!-- \\ content-tabs-i \\ -->
                                        <!-- // content-tabs-i // -->
                                        <div class="content-tabs-i">
                                            <div class="reviews-a">

                                                <div class="reviews-c">
                                                    <div class="reviews-l">
                                                        <div class="reviews-total">4.7/5.0</div>
                                                        <nav class="reviews-total-stars">
                                                            <ul>
                                                                <li><a href="#"><img alt="" src="images/r-stars-total-b.png"></a></li>
                                                                <li><a href="#"><img alt="" src="images/r-stars-total-b.png"></a></li>
                                                                <li><a href="#"><img alt="" src="images/r-stars-total-b.png"></a></li>
                                                                <li><a href="#"><img alt="" src="images/r-stars-total-b.png"></a></li>
                                                                <li><a href="#"><img alt="" src="images/r-stars-total-a.png"></a></li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                        </nav>
                                                    </div>
                                                    <div class="reviews-r">
                                                        <div class="reviews-rb">
                                                            <div class="reviews-percents">
                                                                <label>4.7 out of 5 stars</label>
                                                                <div class="reviews-percents-i"><span></span></div>
                                                            </div>
                                                            <div class="reviews-percents">
                                                                <label>100% clients recommeted</label>
                                                                <div class="reviews-percents-i"><span></span></div>
                                                            </div>
                                                        </div>
                                                        <br class="clear" />
                                                    </div>
                                                </div>
                                                <div class="clear"></div>

                                                <div class="reviews-devider"></div>

                                                <div class="hotel-reviews">
                                                    <h2>Hotel Facilities</h2>
                                                    <div class="hotel-reviews-row">
                                                        <!-- // -->
                                                        <div class="hotel-reviews-i">
                                                            <div class="hotel-reviews-left">Cleanlines</div>
                                                            <nav class="hotel-reviews-right">
                                                                <ul>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                </ul>
                                                            </nav>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="hotel-reviews-i">
                                                            <div class="hotel-reviews-left">Price</div>
                                                            <nav class="hotel-reviews-right">
                                                                <ul>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                </ul>
                                                            </nav>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="hotel-reviews-i">
                                                            <div class="hotel-reviews-left">Sleep Quality</div>
                                                            <nav class="hotel-reviews-right">
                                                                <ul>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                </ul>
                                                            </nav>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="hotel-reviews-i">
                                                            <div class="hotel-reviews-left">Service & Stuff</div>
                                                            <nav class="hotel-reviews-right">
                                                                <ul>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                </ul>
                                                            </nav>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="hotel-reviews-i">
                                                            <div class="hotel-reviews-left">Location</div>
                                                            <nav class="hotel-reviews-right">
                                                                <ul>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                </ul>
                                                            </nav>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="hotel-reviews-i">
                                                            <div class="hotel-reviews-left">Comfort</div>
                                                            <nav class="hotel-reviews-right">
                                                                <ul>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-b.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                    <li><a href="#"><img alt="" src="images/sstar-a.png"></a></li>
                                                                </ul>
                                                            </nav>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>

                                                <div class="hotel-reviews-devider"></div>

                                                <div class="guest-reviews">
                                                    <h2>Guest Reviews</h2>
                                                    <div class="guest-reviews-row">
                                                        <!-- // -->
                                                        <div class="guest-reviews-i">
                                                            <div class="guest-reviews-a">
                                                                <div class="guest-reviews-l">
                                                                    <div class="guest-reviews-img">
                                                                        <span>5.0</span>
                                                                        <img alt="" src="images/guest-01.png">
                                                                    </div>
                                                                </div>
                                                                <div class="guest-reviews-r">
                                                                    <div class="guest-reviews-rb">
                                                                        <div class="guest-reviews-b">
                                                                            <div class="guest-reviews-bl">
                                                                                <div class="guest-reviews-blb">
                                                                                    <div class="guest-reviews-lbl">Gabriela King</div>
                                                                                    <div class="guest-reviews-lbl-a">from United Kingdom</div>
                                                                                    <div class="guest-reviews-txt">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.</div>
                                                                                </div>
                                                                                <br class="clear" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="guest-reviews-br">
                                                                            <div class="guest-reviews-padding">
                                                                                <nav>
                                                                                    <ul>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-a.png"></li>
                                                                                    </ul>
                                                                                </nav>
                                                                                <div class="guest-rating">4,5/5.0</div>
                                                                                <div class="clear"></div>
                                                                                <div class="guest-rating-txt">Recomended</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br class="clear" />
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="guest-reviews-i">
                                                            <div class="guest-reviews-a">
                                                                <div class="guest-reviews-l">
                                                                    <div class="guest-reviews-img">
                                                                        <span>5.0</span>
                                                                        <img alt="" src="images/guest-02.png">
                                                                    </div>
                                                                </div>
                                                                <div class="guest-reviews-r">
                                                                    <div class="guest-reviews-rb">
                                                                        <div class="guest-reviews-b">
                                                                            <div class="guest-reviews-bl">
                                                                                <div class="guest-reviews-blb">
                                                                                    <div class="guest-reviews-lbl">Robert Dowson</div>
                                                                                    <div class="guest-reviews-lbl-a">from Austria</div>
                                                                                    <div class="guest-reviews-txt">Qoluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. </div>
                                                                                </div>
                                                                                <br class="clear" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="guest-reviews-br">
                                                                            <div class="guest-reviews-padding">
                                                                                <nav>
                                                                                    <ul>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-a.png"></li>
                                                                                    </ul>
                                                                                </nav>
                                                                                <div class="guest-rating">4,5/5.0</div>
                                                                                <div class="clear"></div>
                                                                                <div class="guest-rating-txt">Recomended</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br class="clear" />
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="guest-reviews-i">
                                                            <div class="guest-reviews-a">
                                                                <div class="guest-reviews-l">
                                                                    <div class="guest-reviews-img">
                                                                        <span>4.4</span>
                                                                        <img alt="" src="images/guest-03.png">
                                                                    </div>
                                                                </div>
                                                                <div class="guest-reviews-r">
                                                                    <div class="guest-reviews-rb">
                                                                        <div class="guest-reviews-b">
                                                                            <div class="guest-reviews-bl">
                                                                                <div class="guest-reviews-blb">
                                                                                    <div class="guest-reviews-lbl">Mike Tyson</div>
                                                                                    <div class="guest-reviews-lbl-a">from France</div>
                                                                                    <div class="guest-reviews-txt">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</div>
                                                                                </div>
                                                                                <br class="clear" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="guest-reviews-br">
                                                                            <div class="guest-reviews-padding">
                                                                                <nav>
                                                                                    <ul>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-a.png"></li>
                                                                                    </ul>
                                                                                </nav>
                                                                                <div class="guest-rating">4,5/5.0</div>
                                                                                <div class="clear"></div>
                                                                                <div class="guest-rating-txt">Recomended</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br class="clear" />
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                        <!-- // -->
                                                        <div class="guest-reviews-i">
                                                            <div class="guest-reviews-a">
                                                                <div class="guest-reviews-l">
                                                                    <div class="guest-reviews-img">
                                                                        <span>5.0</span>
                                                                        <img alt="" src="images/guest-04.png">
                                                                    </div>
                                                                </div>
                                                                <div class="guest-reviews-r">
                                                                    <div class="guest-reviews-rb">
                                                                        <div class="guest-reviews-b">
                                                                            <div class="guest-reviews-bl">
                                                                                <div class="guest-reviews-blb">
                                                                                    <div class="guest-reviews-lbl">Lina King</div>
                                                                                    <div class="guest-reviews-lbl-a">from United Kingdom</div>
                                                                                    <div class="guest-reviews-txt">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</div>
                                                                                </div>
                                                                                <br class="clear" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="guest-reviews-br">
                                                                            <div class="guest-reviews-padding">
                                                                                <nav>
                                                                                    <ul>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-b.png"></li>
                                                                                        <li><img alt="" src="images/g-star-a.png"></li>
                                                                                    </ul>
                                                                                </nav>
                                                                                <div class="guest-rating">4,5/5.0</div>
                                                                                <div class="clear"></div>
                                                                                <div class="guest-rating-txt">Recomended</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br class="clear" />
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- \\ -->
                                                    </div>
                                                    <a href="#" class="guest-reviews-more">load more reviews</a>

                                                    <div class="review-form">
                                                        <h2>Live Review</h2>
                                                        <label>User Name:</label>
                                                        <div class="input-a"><input type="text" placeholder="" value=""></div>
                                                        <label>Your Review:</label>
                                                        <div class="textarea-a"><textarea></textarea></div>

                                                        <div class="review-rangers-row">
                                                            <div class="review-ranger">
                                                                <label>Cleanlines</label>
                                                                <div class="review-ranger-r">
                                                                    <div class="slider-range-min"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="review-ranger">
                                                                <label>Service & Stuff</label>
                                                                <div class="review-ranger-r">
                                                                    <div class="slider-range-min"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="review-ranger">
                                                                <label>Price</label>
                                                                <div class="review-ranger-r">
                                                                    <div class="slider-range-min"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="review-ranger">
                                                                <label>Location</label>
                                                                <div class="review-ranger-r">
                                                                    <div class="slider-range-min"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="review-ranger">
                                                                <label>Sleep Quality</label>
                                                                <div class="review-ranger-r">
                                                                    <div class="slider-range-min"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="review-ranger">
                                                                <label>Comfort</label>
                                                                <div class="review-ranger-r">
                                                                    <div class="slider-range-min"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <label>Evaluation</label>
                                                        <select class="custom-select">
                                                            <option>&nbsp;</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                        <label>When did you travel?</label>
                                                        <div class="input-a"><input type="text" value="" /></div>
                                                        <button class="review-send">Submit Review</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- \\ content-tabs-i \\ -->
                                        <!-- // content-tabs-i // -->
                                        <div class="content-tabs-i">
                                            <h2>Things to do</h2>
                                            <p class="small">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. </p>
                                            <div class="todo-devider"></div>
                                            <div class="todo-row">
                                                <!-- // -->
                                                <div class="cat-list-item">
                                                    <div class="cat-list-item-l">
                                                        <a href="#"><img alt="" src="images/todo-01.jpg"></a>
                                                    </div>
                                                    <div class="cat-list-item-r">
                                                        <div class="cat-list-item-rb">
                                                            <div class="cat-list-item-p">
                                                                <div class="cat-list-content">
                                                                    <div class="cat-list-content-a">
                                                                        <div class="cat-list-content-l">
                                                                            <div class="cat-list-content-lb">
                                                                                <div class="cat-list-content-lpadding">
                                                                                    <div class="offer-slider-link"><a href="#">Totam rem aperiam, eaque ipsa quae</a></div>
                                                                                    <div class="offer-rate">Exelent</div>
                                                                                    <p>Voluptatem quia voluptas sit aspernatur aut odit  aut figut, sed quia consequuntur magni dolores eos qui  voluptatem sequi nescuint. Neque porro quisqua. Sed ut perspiciatis  unde omnis ste.</p>
                                                                                </div>
                                                                            </div>
                                                                            <br class="clear">
                                                                        </div>
                                                                    </div>
                                                                    <div class="cat-list-content-r">
                                                                        <div class="cat-list-content-p">
                                                                            <nav class="stars">
                                                                                <ul>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                </ul>
                                                                                <div class="clear"></div>
                                                                            </nav>
                                                                            <div class="cat-list-review">31 reviews</div>
                                                                            <a href="#" class="todo-btn">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br class="clear">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="cat-list-item">
                                                    <div class="cat-list-item-l">
                                                        <a href="#"><img alt="" src="images/todo-02.jpg"></a>
                                                    </div>
                                                    <div class="cat-list-item-r">
                                                        <div class="cat-list-item-rb">
                                                            <div class="cat-list-item-p">
                                                                <div class="cat-list-content">
                                                                    <div class="cat-list-content-a">
                                                                        <div class="cat-list-content-l">
                                                                            <div class="cat-list-content-lb">
                                                                                <div class="cat-list-content-lpadding">
                                                                                    <div class="offer-slider-link"><a href="#">Invertore veitatis et quasi architecto</a></div>
                                                                                    <div class="offer-rate">Exelent</div>
                                                                                    <p>Voluptatem quia voluptas sit aspernatur aut odit  aut figut, sed quia consequuntur magni dolores eos qui  voluptatem sequi nescuint. Neque porro quisqua. Sed ut perspiciatis  unde omnis ste.</p>
                                                                                </div>
                                                                            </div>
                                                                            <br class="clear">
                                                                        </div>
                                                                    </div>
                                                                    <div class="cat-list-content-r">
                                                                        <div class="cat-list-content-p">
                                                                            <nav class="stars">
                                                                                <ul>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                </ul>
                                                                                <div class="clear"></div>
                                                                            </nav>
                                                                            <div class="cat-list-review">31 reviews</div>
                                                                            <a href="#" class="todo-btn">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br class="clear">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="cat-list-item">
                                                    <div class="cat-list-item-l">
                                                        <a href="#"><img alt="" src="images/todo-03.jpg"></a>
                                                    </div>
                                                    <div class="cat-list-item-r">
                                                        <div class="cat-list-item-rb">
                                                            <div class="cat-list-item-p">
                                                                <div class="cat-list-content">
                                                                    <div class="cat-list-content-a">
                                                                        <div class="cat-list-content-l">
                                                                            <div class="cat-list-content-lb">
                                                                                <div class="cat-list-content-lpadding">
                                                                                    <div class="offer-slider-link"><a href="#">Dolores eos qui ratione voluptatem</a></div>
                                                                                    <div class="offer-rate">Exelent</div>
                                                                                    <p>Voluptatem quia voluptas sit aspernatur aut odit  aut figut, sed quia consequuntur magni dolores eos qui  voluptatem sequi nescuint. Neque porro quisqua. Sed ut perspiciatis  unde omnis ste.</p>
                                                                                </div>
                                                                            </div>
                                                                            <br class="clear">
                                                                        </div>
                                                                    </div>
                                                                    <div class="cat-list-content-r">
                                                                        <div class="cat-list-content-p">
                                                                            <nav class="stars">
                                                                                <ul>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                </ul>
                                                                                <div class="clear"></div>
                                                                            </nav>
                                                                            <div class="cat-list-review">31 reviews</div>
                                                                            <a href="#" class="todo-btn">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br class="clear">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="cat-list-item">
                                                    <div class="cat-list-item-l">
                                                        <a href="#"><img alt="" src="images/todo-04.jpg"></a>
                                                    </div>
                                                    <div class="cat-list-item-r">
                                                        <div class="cat-list-item-rb">
                                                            <div class="cat-list-item-p">
                                                                <div class="cat-list-content">
                                                                    <div class="cat-list-content-a">
                                                                        <div class="cat-list-content-l">
                                                                            <div class="cat-list-content-lb">
                                                                                <div class="cat-list-content-lpadding">
                                                                                    <div class="offer-slider-link"><a href="#">Neque porro quisquaem est qui dolorem</a></div>
                                                                                    <div class="offer-rate">Exelent</div>
                                                                                    <p>Voluptatem quia voluptas sit aspernatur aut odit  aut figut, sed quia consequuntur magni dolores eos qui  voluptatem sequi nescuint. Neque porro quisqua. Sed ut perspiciatis  unde omnis ste.</p>
                                                                                </div>
                                                                            </div>
                                                                            <br class="clear">
                                                                        </div>
                                                                    </div>
                                                                    <div class="cat-list-content-r">
                                                                        <div class="cat-list-content-p">
                                                                            <nav class="stars">
                                                                                <ul>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                    <li><a href="#"><img alt="" src="images/todostar-a.png"></a></li>
                                                                                </ul>
                                                                                <div class="clear"></div>
                                                                            </nav>
                                                                            <div class="cat-list-review">31 reviews</div>
                                                                            <a href="#" class="todo-btn">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br class="clear">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <!-- \\ -->
                                            </div>
                                            <a href="#" class="guest-reviews-more">Load more reviews</a>
                                        </div>
                                        <!-- \\ content-tabs-i \\ -->
                                        <!-- // content-tabs-i // -->
                                        <div class="content-tabs-i">
                                            <h2>FAQ</h2>
                                            <p class="small">Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. </p>
                                            <div class="todo-devider"></div>
                                            <div class="faq-row">
                                                <!-- // -->
                                                <div class="faq-item">
                                                    <div class="faq-item-a">
                                                        <span class="faq-item-left">Totam rem aperiam, eaquie ipsa quae?</span>
                                                        <span class="faq-item-i"></span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="faq-item-b">
                                                        <div class="faq-item-p">
                                                            Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia aspernatur aut odit aut fugit consequuntur magni dolores eos qui voluptatem sequi nesciunt. aspernatur aut odit aut fugit
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="faq-item">
                                                    <div class="faq-item-a">
                                                        <span class="faq-item-left">Dolores eos qui ratione voluptatem sequi nescuin?</span>
                                                        <span class="faq-item-i"></span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="faq-item-b">
                                                        <div class="faq-item-p">
                                                            Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia aspernatur aut odit aut fugit consequuntur magni dolores eos qui voluptatem sequi nesciunt. aspernatur aut odit aut fugit
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="faq-item">
                                                    <div class="faq-item-a">
                                                        <span class="faq-item-left">Neque porro quisquam est, qui dolorem ipsum?</span>
                                                        <span class="faq-item-i"></span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="faq-item-b">
                                                        <div class="faq-item-p">
                                                            Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia aspernatur aut odit aut fugit consequuntur magni dolores eos qui voluptatem sequi nesciunt. aspernatur aut odit aut fugit
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="faq-item">
                                                    <div class="faq-item-a">
                                                        <span class="faq-item-left">Dolor sit amet consectutur adipisci velit, sed?</span>
                                                        <span class="faq-item-i"></span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="faq-item-b">
                                                        <div class="faq-item-p">
                                                            Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia aspernatur aut odit aut fugit consequuntur magni dolores eos qui voluptatem sequi nesciunt. aspernatur aut odit aut fugit
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- \\ -->
                                                <!-- // -->
                                                <div class="faq-item">
                                                    <div class="faq-item-a">
                                                        <span class="faq-item-left">Consectetur, adipisci velit, sed quia non numquam?</span>
                                                        <span class="faq-item-i"></span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="faq-item-b">
                                                        <div class="faq-item-p">
                                                            Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia aspernatur aut odit aut fugit consequuntur magni dolores eos qui voluptatem sequi nesciunt. aspernatur aut odit aut fugit
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- \\ -->
                                            </div>
                                        </div>
                                        <!-- \\ content-tabs-i \\ -->

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="sp-page-r">
                    <div class="h-detail-r">
                        <div class="h-detail-lbl">
                            <div class="h-detail-lbl-a">Andrassy Thai Hotel </div>
                            <div class="h-detail-lbl-b">Paris, france</div>
                        </div>
                        <div class="h-detail-stars">
                            <ul class="h-stars-list">
                                <li><a href="#"><img alt="" src="images/hd-star-b.png"></a></li>
                                <li><a href="#"><img alt="" src="images/hd-star-b.png"></a></li>
                                <li><a href="#"><img alt="" src="images/hd-star-b.png"></a></li>
                                <li><a href="#"><img alt="" src="images/hd-star-b.png"></a></li>
                                <li><a href="#"><img alt="" src="images/hd-star-a.png"></a></li>
                            </ul>
                            <div class="h-stars-lbl">156 reviews</div>
                            <a href="#" class="h-add-review">add review</a>
                            <div class="clear"></div>
                        </div>
                        <div class="h-details-text">
                            <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. </p>
                            <p>Neque porro quisqua. Sed ut perspiciatis unde omnis ste natus error sit voluptatem.</p>
                        </div>
                        <a href="#" class="wishlist-btn">
                            <span class="wishlist-btn-l"><i></i></span>
                            <span class="wishlist-btn-r">ADD TO wish list</span>
                            <div class="clear"></div>
                        </a>
                        <a href="#" class="book-btn">
                            <span class="book-btn-l"><i></i></span>
                            <span class="book-btn-r">ADD TO wish list</span>
                            <div class="clear"></div>
                        </a>
                    </div>

                    <div class="h-help">
                        <div class="h-help-lbl">Need Sparrow Help?</div>
                        <div class="h-help-lbl-a">We would be happy to help you!</div>
                        <div class="h-help-phone">2-800-256-124 23</div>
                        <div class="h-help-email">sparrow@mail.com</div>
                    </div>

                    <div class="reasons-rating">
                        <div id="reasons-slider">
                            <!-- // -->
                            <div class="reasons-rating-i">
                                <div class="reasons-rating-txt">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam.</div>
                                <div class="reasons-rating-user">
                                    <div class="reasons-rating-user-l">
                                        <img alt="" src="images/r-user.png">
                                        <span>5.0</span>
                                    </div>
                                    <div class="reasons-rating-user-r">
                                        <b>Gabriela King</b>
                                        <span>from United Kingdom</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- \\ -->
                            <!-- // -->
                            <div class="reasons-rating-i">
                                <div class="reasons-rating-txt">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam.</div>
                                <div class="reasons-rating-user">
                                    <div class="reasons-rating-user-l">
                                        <img alt="" src="images/r-user.png">
                                        <span>5.0</span>
                                    </div>
                                    <div class="reasons-rating-user-r">
                                        <b>Robert Dowson</b>
                                        <span>from Austria</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- \\ -->
                            <!-- // -->
                            <div class="reasons-rating-i">
                                <div class="reasons-rating-txt">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam.</div>
                                <div class="reasons-rating-user">
                                    <div class="reasons-rating-user-l">
                                        <img alt="" src="images/r-user.png">
                                        <span>5.0</span>
                                    </div>
                                    <div class="reasons-rating-user-r">
                                        <b>Mike Tyson</b>
                                        <span>from France</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- \\ -->
                        </div>
                    </div>

                    <div class="h-liked">
                        <div class="h-liked-lbl">You May Also Like</div>
                        <div class="h-liked-row">
                            <!-- // -->
                            <div class="h-liked-item">
                                <div class="h-liked-item-i">
                                    <div class="h-liked-item-l">
                                        <a href="#"><img alt="" src="images/like-01.jpg"></a>
                                    </div>
                                    <div class="h-liked-item-c">
                                        <div class="h-liked-item-cb">
                                            <div class="h-liked-item-p">
                                                <div class="h-liked-title"><a href="#">Andrassy Thai Hotel</a></div>
                                                <div class="h-liked-rating">
                                                    <nav class="stars">
                                                        <ul>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-a.png" /></a></li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                    </nav>
                                                </div>
                                                <div class="h-liked-foot">
                                                    <span class="h-liked-price">850$</span>
                                                    <span class="h-liked-comment">avg/night</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->
                            <!-- // -->
                            <div class="h-liked-item">
                                <div class="h-liked-item-i">
                                    <div class="h-liked-item-l">
                                        <a href="#"><img alt="" src="images/like-02.jpg"></a>
                                    </div>
                                    <div class="h-liked-item-c">
                                        <div class="h-liked-item-cb">
                                            <div class="h-liked-item-p">
                                                <div class="h-liked-title"><a href="#">Campanile Cracovie</a></div>
                                                <div class="h-liked-rating">
                                                    <nav class="stars">
                                                        <ul>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-a.png" /></a></li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                    </nav>
                                                </div>
                                                <div class="h-liked-foot">
                                                    <span class="h-liked-price">964$</span>
                                                    <span class="h-liked-comment">avg/night</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->
                            <!-- // -->
                            <div class="h-liked-item">
                                <div class="h-liked-item-i">
                                    <div class="h-liked-item-l">
                                        <a href="#"><img alt="" src="images/like-03.jpg"></a>
                                    </div>
                                    <div class="h-liked-item-c">
                                        <div class="h-liked-item-cb">
                                            <div class="h-liked-item-p">
                                                <div class="h-liked-title"><a href="#">Ermin's Hotel</a></div>
                                                <div class="h-liked-rating">
                                                    <nav class="stars">
                                                        <ul>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-b.png" /></a></li>
                                                            <li><a href="#"><img alt="" src="images/star-a.png" /></a></li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                    </nav>
                                                </div>
                                                <div class="h-liked-foot">
                                                    <span class="h-liked-price">500$</span>
                                                    <span class="h-liked-comment">avg/night</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->
                        </div>
                    </div>

                    <div class="h-reasons">
                        <div class="h-liked-lbl">Reasons to Book with us</div>
                        <div class="h-reasons-row">
                            <!-- // -->
                            <div class="reasons-i">
                                <div class="reasons-h">
                                    <div class="reasons-l">
                                        <img alt="" src="images/reasons-a.png">
                                    </div>
                                    <div class="reasons-r">
                                        <div class="reasons-rb">
                                            <div class="reasons-p">
                                                <div class="reasons-i-lbl">Awesome design</div>
                                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
                                            </div>
                                        </div>
                                        <br class="clear" />
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->
                            <!-- // -->
                            <div class="reasons-i">
                                <div class="reasons-h">
                                    <div class="reasons-l">
                                        <img alt="" src="images/reasons-b.png">
                                    </div>
                                    <div class="reasons-r">
                                        <div class="reasons-rb">
                                            <div class="reasons-p">
                                                <div class="reasons-i-lbl">carefylly handcrafted</div>
                                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
                                            </div>
                                        </div>
                                        <br class="clear" />
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->
                            <!-- // -->
                            <div class="reasons-i">
                                <div class="reasons-h">
                                    <div class="reasons-l">
                                        <img alt="" src="images/reasons-c.png">
                                    </div>
                                    <div class="reasons-r">
                                        <div class="reasons-rb">
                                            <div class="reasons-p">
                                                <div class="reasons-i-lbl">sustomer support</div>
                                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
                                            </div>
                                        </div>
                                        <br class="clear" />
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
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
<script src="javascript/custom.select.js"></script>
<script type="text/javascript" src="javascript/twitterfeed.js"></script>
<script>

    $(document).ready(function(){
        $('.custom-select').customSelect();
        $('.review-ranger').each(function(){
            var $this = $(this);
            var $index = $(this).index();
            if ( $index=='0' ) {
                var $val = '3.0'
            } else if ( $index=='1' ) {
                var $val = '3.8'
            } else if ( $index=='2' ) {
                var $val = '2.8'
            } else if ( $index=='3' ) {
                var $val = '4.8'
            } else if ( $index=='4' ) {
                var $val = '4.3'
            } else if ( $index=='5' ) {
                var $val = '5.0'
            }
            $this.find('.slider-range-min').slider({
                range: "min",
                step: 0.1,
                value: $val,
                min: 0.1,
                max: 5.1,
                create: function( event, ui ) {
                    $this.find('.ui-slider-handle').append('<span class="range-holder"><i></i></span>');
                },
                slide: function( event, ui ) {
                    $this.find(".range-holder i").text(ui.value);
                }
            });
            $this.find(".range-holder i").text($val);
        });

        $('#reasons-slider').bxSlider({
            infiniteLoop: true,
            speed: 500,
            mode:'fade',
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            auto: true,
            slideMargin: 0
        });

        $('#gallery').bxSlider({
            infiniteLoop: true,
            speed: 500,
            slideWidth: 108,
            minSlides: 1,
            maxSlides: 6,
            moveSlides: 1,
            auto: false,
            slideMargin: 7
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