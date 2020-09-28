
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresh Food | Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap')}}" rel="stylesheet">

    <!-- Css Styles -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
     <link rel="stylesheet" href="{{asset('css/contact.css')}}" type="text/css">
       <link rel="stylesheet" href="{{asset('css/promo.css')}}" type="text/css">
       <div class="pb-5 ">
        <form id="language">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('user.index')}}"> <img src="{{asset('img/logo1.png')}}" style="height:50px"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

         <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="navlang">
            <li class="nav-item {{Request::segment(2)=='index'? 'bg-white':''}}">
                <a class="nav-link" href="{{route('user.index')}}">Home </a>
            </li>
            <li class="nav-item {{Request::segment(2)=='promo'? 'bg-white':''}}">
                <a class="nav-link" href="{{route('user.promo')}}">Shop</a>
            </li>
            <li class="nav-item {{Request::segment(2)=='shopping'? 'bg-white':''}}">
                <a class="nav-link" href="{{route('user.shopping')}}">Shoping Cart</a>
            </li>
            <li class="nav-item {{Request::segment(2)=='checkout'? 'bg-white':''}}">
                <a class="nav-link" href="{{route('user.checkout')}}">Check Out</a>
            </li>
            <li class="nav-item {{Request::segment(2)=='contact'? 'bg-white':''}}">
                <a class="nav-link" href="{{route('user.contact')}}">Contact</a>
            </li>
            </ul>

        <form class="form-inline my-2 my-lg-0">
        <div class="d-flex">
                <img src="{{asset('img/flag.png')}}" style="width:50px">
                <form id="language">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-success ">
                                                            <input
                                                            type="radio"
                                                            value="mm"
                                                            name="options"
                                                            id="option1"
                                                            autocomplete="off"

                                                            />
                                                            MM
                                                        </label>
                                                        <label class="btn btn-success ">
                                                            <input
                                                            type="radio"
                                                            value="en"
                                                            name="options"
                                                            id="option2"
                                                            autocomplete="off"
                                                            checked="true"/>
                                                            EN
                                                        </label>
                                    </div>
                                </form>
            </form>
                <div class="col-lg-2 mt-1">


                    <a href="{{route('user.shopping')}}" class="btn btn-outline-success d-flex pr-5 w-50">
                        <span class="fa fa-shopping-cart"></span> <span class="badge badge-light" id="countText">0</span>

                    </a>



                </div>

        </div>
    </div>
    </nav>
  </form>
</div>
</head>
<body>


 <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+79-451-4143</h5>
                                <span>support 24Hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
          <img src="{{asset('img/breadcrumb.jpg')}}" id="contactimg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Fresh Food Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('user.index')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="product spad pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Butter & Eggs</a></li>
                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>
                                <li><a href="#">Papayaya & Crisps</a></li>
                                <li><a href="#">Oatmeal</a></li>
                            </ul>
                        </div>
                </div>
        </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-1.jpg">
                                             <img src="{{asset('img/product/discount/pd-1.jpg')}}" alt="" style="width:350px" >
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">MMK-1200<span>MMK-2000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-2.jpg">
                                            <img src="{{asset('img/product/discount/pd-2.jpg')}}" alt="" style="width:350px" >
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Vegetables</span>
                                            <h5><a href="#">Vegetables’package</a></h5>
                                            <div class="product__item__price">MMK-3200 <span>MMK-4000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-3.jpg">
                                              <img src="{{asset('img/product/discount/pd-3.jpg')}}" alt="" style="width:350px" >
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Mixed Fruitss</a></h5>
                                            <div class="product__item__price">MMK-700 <span>MMK-1500</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-4.jpg">
                                             <img src="{{asset('img/product/discount/pd-4.jpg')}}" alt="" style="width:350px" >
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">MMK-500 <span>MMK-1300</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-5.jpg">
                                             <img src="{{asset('img/product/discount/pd-5.jpg')}}" alt="" style="width:350px" >
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">MMK-3000 <span>MMK-2200</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-6.jpg">
                                             <img src="{{asset('img/product/product-7.jpg')}}" alt="" style="width:350px" >
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">MMK-3000 <span>MMK-2200</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>



    </section>
     <section class="checkout spad p-0 ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>

        </div>
    </section>


                    <div class="container">
                        <div class="row shadow" id="itemPromo">

                        </div>
                    </div>

                </div>
            </div>
        </div>

     <section class="shoping-cart spad">



    <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount ">
                            <h5>Discount Codes</h5>
                            <div class="shadow">
                                <input type="text" class="form-control  p-4 col-12" onchange="loadData(this.value)" placeholder="Enter your coupon code">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total MMK</h5>

                            {{-- <li id="total">Subtotal <span>$454.98</span></li> --}}
                            <span id="total"></span>

                        <a href="{{route('user.checkout')}}" class="primary-btn">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset('img/logo1.png')}}" style="width:115px"></a>
                        </div>
                        <ul>
                            <li id="itemlangyqw">Address: Shin Saw Pu Rd,Yangon</li>
                            <li id="itemlangyqe">Phone:  +79-451-4143</li>
                            <li id="itemlangyqr">Email: hello@freshfoodshop.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6 id="itemlangyqu">Useful Links</h6>
                        <div id="iconfoot">
                            <a href="https://maypyaesone.me/"><img src="{{asset('img/banner/4.png')}}" ></a>
                            <a href="https://school.maypyaesone.me/user/index"><img src="{{asset('img/banner/1.png')}}"></a>

                            <a href="https://shop.maypyaesone.me/user/home"><img src="{{asset('img/banner/2.png')}}"></a>

                            <a href="https://myproject.maypyaesone.me/"><img src="{{asset('img/banner/3.png')}}" ></a>
                            <br>
                            <a href="https://viruswar.maypyaesone.me/"><img src="{{asset('img/banner/5.png')}}"></a>
                            <a href="https://photo.maypyaesone.me/"><img src="{{asset('img/banner/6.png')}}" ></a>

                             <a href="https://select.maypyaesone.me/"><img src="{{asset('img/banner/7.png')}}" ></a>
                               <a href="https://select.maypyaesone.me/"><img src="{{asset('img/banner/9.png')}}" style="width:80px"></a>

                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p id="itemlangyqy">Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="https://web.facebook.com/may.pyae.56808"><i class="fa fa-facebook"></i></a>
                            <a href="http://maypyaesone.me/"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/MayPyaeSone14"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/may-pyae-sone-403184175/"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p id="itemlangyqt">
         Stay Home Shopping&copy;Fresh Food |Shop &copy;<script>document.write(new Date().getFullYear());</script>Fresh Food |Shop <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Fresh Food Shop</a>
       </p></div>
                        <div class="footer__copyright__payment"><img src="{{asset('img/payment-item.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/amain.js')}}"></script>

    <script src="{{asset('js/language.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>
      <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/promo.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>




