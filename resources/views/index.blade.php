<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Restaurant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="apple-touch-icon" href="public/images/my_images/icon-title.jpg"> -->
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--        <link rel="stylesheet" href="public/css/bootstrap-theme.min.css">-->
    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{url('public/css/plugins.css')}}"/>
    <link rel="stylesheet" href="public/css/lato-webfont.css"/>
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!-- My custom CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/page.css">
    <!-- Daterator -->
    <link rel="stylesheet" type="text/css" href="public/css/fm.datetator.jquery.css">
    <!--Theme custom css -->
    <link rel="stylesheet" href="public/css/style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="public/css/responsive.css"/>
    <link rel="stylesheet" href="public/css/sweetalert.css"/>
    <script src="public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class='preloader'>
    <div class='loaded'>&nbsp;</div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="public/images/logo.png" alt=""/></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#ingredients">Intergredients</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#reservation">Reservations</a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-youtube"></a></li>
                <li><a href="#" class="fa fa-facebook"></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--Home page style-->
<header id="home" class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-content sections">
                    <h1>the right ingredients</h1>
                    <h1>for the right food</h1>
                    <div class="text-center"><img src="public/images/my_images/decoration.png"></div>
                    <div class="text-center">
                        <a target="_blank" href="#reservation">
                            <button class="btn-book btn-black">Book A Table</button>
                        </a>
                        <a target="_blank" href="#menu">
                            <button class="btn-menu btn-white">See The Menu</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Sections -->
<section id="about" class="sections lightbg">
    <div class=" text-center">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <h1 class="title-about">Just the right food</h1>
            <div class="divider2"><img src="public/images/my_images/devider2.png"></div>
            <p class="about-text">
                If you’ve been to one of our restaurants, you’ve seen – and tasted - what keeps our customer coming back
                for more.Perfect materials and freshly baked food,delicious Lambda cakes, muffins,and gourmet coffes
                make us hard to resist!<br/>Stop in today and check us out!
            </p>
            <img class="img-cook" src="public/images/my_images/img-cook.png">
        </div>
        <!-- Example row of columns -->
        <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="public/images/my_images/disc.png">
        </div>
    </div> <!-- /container -->
</section>
<!-- Sections -->
<section id="ingredients" class="sections">
    <div class="col-md-5 col-md-offset-6">
        <div class="content-right">
            <h3 class="title-ingredients">Fine ingredients</h3>
            <img src="public/images/my_images/devider3.png" alt="" class="devider">
            <p>If you’ve been to one of our restaurants, you’ve seen – and tasted - what keeps our customer coming back
                for more.Perfect materials and freshly baked food,delicious Lambda cakes, muffins,and gourmet coffes
                make us hard to resist! Stop in today and check us out!</p>
            <div class="ingre-item">
                <div class="ingredients_images"><img src="public/images/my_images/section3-item1.png" alt=""
                                                     class="img-circle"></div>
                <div class="ingredients_images"><img src="public/images/my_images/section3-item2.png" alt=""
                                                     class="img-circle"></div>
                <div class="ingredients_images"><img src="public/images/my_images/section3-item3.png" alt=""
                                                     class="img-circle"></div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
</section>
<!-- Sections -->
<section id="menu" class="sections">
    <div class="container text-center">
        <div class="col-md-6 menu-left">
            @if( ! empty($categories))
                @for($i = 0 ; $i < 2; $i++)
                    @if (! empty($categories[$i]))
                        <div class="box-item">
                            <h3 class="title-menu">{{$categories[$i]->name}}</h3>
                            <img src="public/images/my_images/devider2.png" alt="">
                            <ul class="details-menu">
                                <?php $items = $categories[$i]->items;?>
                                @for($j = 0; $j< 2; $j++)
                                    @if(isset($items[$j]))
                                        @if($items[$j]->type == 0)
                                            <li>
                                                <div class="header-details">
                                                    <a class="pull-left"
                                                       href="">{{$categories[$i]->items[$j]->name}}</a>
                                                    <span class="pull-right">$<?php echo $categories[$i]->items[$j]->price;?></span>
                                                </div>
                                                <div class="text-details">{{$categories[$i]->items[$j]->description}}
                                                </div>
                                            </li>
                                        @else
                                            <fieldset style="border: 1px black #e4dcbd">
                                                <legend>special</legend>
                                                <li>
                                                    <div class="header-details">
                                                        <a class="pull-left"
                                                           href="">{{$categories[$i]->items[$j]->name}}</a>
                                                        <span class="pull-right">$<?php echo $categories[$i]->items[$j]->price;?></span>
                                                    </div>
                                                    <div class="text-details">{{$categories[$i]->items[$j]->description}}</div>
                                                </li>
                                            </fieldset>
                                        @endif
                                    @endif
                                @endfor
                            </ul>
                        </div>
                    @endif
                @endfor
            @endif
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6 menu-right">
            @if( ! empty($categories))
                @for($i = 2 ; $i < 4; $i++)
                    @if (! empty($categories[$i]))
                        <div class="box-item">
                            <h3 class="title-menu">{{$categories[$i]->name}}</h3>
                            <img src="public/images/my_images/devider2.png" alt="">
                            <ul class="details-menu">
                                @for($j = 0; $j< 2; $j++)
                                    @if(! empty($categories[$i]->items[$j]))
                                        @if($categories[$i]->items[$j]->type == 0)
                                            <li>
                                                <div class="header-details">
                                                    <a class="pull-left"
                                                       href="">{{$categories[$i]->items[$j]->name}}</a>
                                                    <span class="pull-right">$<?php echo $categories[$i]->items[$j]->price;?></span>
                                                </div>
                                                <div class="text-details">{{$categories[$i]->items[$j]->description}}
                                                </div>
                                            </li>
                                        @else
                                            <fieldset style="border: 1px black #e4dcbd">
                                                <legend>special</legend>
                                                <li>
                                                    <div class="header-details">
                                                        <a class="pull-left"
                                                           href="">{{$categories[$i]->items[$j]->name}}</a>
                                                        <span class="pull-right">$<?php echo $categories[$i]->items[$j]->price;?></span>
                                                    </div>
                                                    <div class="text-details">{{$categories[$i]->items[$j]->description}}</div>
                                                </li>
                                            </fieldset>
                                        @endif
                                    @endif
                                @endfor
                            </ul>
                        </div>
                    @endif
                @endfor
            @endif
        </div>
    </div> <!-- /container -->
</section>
<!-- Sections -->
<section id="reviews" class="sections">
    <div class="col-md-6 col-md-offset-3">
        <div class="content-center">
            <h3 class="title-review">Gust Reviews</h3>
            <img src="public/images/my_images/devider3.png" alt="" class="devider">
            <dir class="" style="clear: both;"></dir>
            <span class="quote">“</span>
            <p>If you’ve been to one of our restaurants, you’ve seen – and tasted - what keeps our customer coming back
                for more.Perfect materials and freshly baked food,delicious Lambda cakes, muffins,and gourmet coffes
                make us hard to resist!<br/> Stop in today and check us out!<br/><br/>
                <small>-food inc,New York</small>
            </p>
        </div>
    </div>
</section>
<!-- Sections -->
<section id="reservation" class="sections lightbg">
    <div class=" text-center">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-6">
                    <img height="460px" width="100%" src="public/images/my_images/item1-section5.png">
                </div>
                <div class="col-md-6">
                    <img height="460px" width="100%" src="public/images/my_images/item2-section5.png">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <h1 class="title-reservation">Just the right food</h1>
            <div class="divider2"><img src="public/images/my_images/devider2.png"></div>
            <p class="about-text">
                If you’ve been to one of our restaurants, you’ve seen – and tasted - what keeps our customer coming back
                for more.Perfect materials and freshly baked food.<br/>
                Delicious Lambda cakes, muffins, and gourmet coffees make us hard to resist! Stop in today and check us
                out! Perfect materials and freshly baked food.
            </p>
            <div class="form-resvation">
                <form action="{{route('addCustomer')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="your name *" required>
                            @if($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="your email *" required>
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="date">Date</label>
                            <!-- <input class="form-control res-date" placeholder="date *"> -->
                            <input type="text" name="date" class="form-control" id="datepicker" placeholder="date *"
                                   required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="party">Party Number</label>
                            <select name="party-number" class="party form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-warning res-btn">Book now!</button>
                        </div>
                </form>
            </div>
        </div>
    </div> <!-- /container -->
</section>
<!-- Sections -->
<div class="scroll-top">
    <div class="scrollup">
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!--Footer-->
<footer id="footer" class="footer colorsbg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 footer-about">
                <div class="copyright text-left text-center footer-about-title ">
                    <h2>About Us</h2>
                    <img class="footer-devider" src="public/images/my_images/devider3.png">
                    <p>
                        Lambda's new and expanded Chelsea location represents a truly authentic Greek
                        patisserie,featuring breakfasts of fresh croissants and streaming bowls of cafe.Lamda the best
                        restaurant in town
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 footer-open">
                <div class="copyright text-left text-center footer-open-title ">
                    <h2>Opening House</h2>
                    <img class="footer-devider" src="public/images/my_images/devider3.png">
                    <p><strong>Mon-Thu:</strong>7:00am - 8:00pm<br/><strong>Fri-Sun:</strong>7:00am - 10:00pm</p>
                    <ul class="footer-icons">
                        <li><a href=""><i class="fa fa-cc-discover fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-cc-mastercard fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-cc-visa fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-cc-paypal fa-lg" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 footer-location">
                <div class="copyright text-left text-center footer-location-title ">
                    <h2>Our Location</h2>
                    <img class="footer-devider" src="public/images/my_images/devider3.png">
                    <p><strong>19th Paradise Street Sitia</strong><br/><strong>128 Meserole Avenue</strong></p>
                    <ul class="footer-icons">
                        <li><a href=""><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-skype fa-lg" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<script src="public/js/vendor/jquery-1.11.2.min.js"></script>
<script src="public/js/vendor/bootstrap.min.js"></script>
<script src="public/js/jquery.magnific-popup.js"></script>
<script src="public/js/plugins.js"></script>
<script src="public/js/main.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="public/js/sweetalert-dev.js"></script>
<script type="text/javascript">
    var dateToday = new Date();
    $("#datepicker").datepicker({
        maxDate: dateToday,
        dateFormat: 'yy-mm-dd'
    });
    @if(! empty(session()->has('bookStatus')))
        swal("Success!", "Your register is successfully", "success");
    @endif
</script>
</body>
</html>