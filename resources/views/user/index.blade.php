 @extends('user/layouts/app')
 @section('content')


     <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span  id="itemlangh">All departments</span>
                        </div>
                        <ul>
                            <li><a href="#" id="itemlangj">Fresh Meat</a></li>
                            <li><a href="#" id="itemlangk">Vegetables</a></li>
                            <li><a href="#"id="itemlangl">Fruit & Nut Gifts</a></li>
                            <li><a href="#"id="itemlangz">Fresh Berries</a></li>
                            <li><a href="#"id="itemlangx">Ocean Foods</a></li>
                            <li><a href="#"id="itemlangc">Butter & Eggs</a></li>
                            <li><a href="#"id="itemlangv">Fastfood</a></li>
                            <li><a href="#"id="itemlangb">Fresh Onion</a></li>
                            <li><a href="#"id="itemlangn">Papayaya & Crisps</a></li>
                            <li><a href="#"id="itemlangm">Oatmeal</a></li>
                            <li><a href="#"id="itemlangqq">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories" id="itemlangs">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text"  >
                                <button type="submit" class="site-btn" id="itemlangf">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5 id="itemlangg">+79-451-4143</h5>
                                <span id="itemlangd">support 24Hours</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg"  style="background-image: url(../img/hero/banner.jpg);">
                       <img src="{{asset('img/hero/banner.jpg')}}" id="coverpt"style="height:431px width:325px" >
                        <div class="hero__text m-4" style="position: absolute">
                            <span id="itemlangi">100% Organic FRUIT FRESH</span>
                            <h3 id="itemlango">Vegetable <br/></h3>
                            <p id="itemlangp">Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn" id="itemlanga">SHOP NOW</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" >
                             <img src="{{asset('img/categories/cat-1.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}" >Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" >
                             <img src="{{asset('img/categories/cat-2.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/cat-3.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/cat-4.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('img/categories/cat-5.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 id="itemlangpq">Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>

                            <li data-filter=".oranges" id="itemlangpe">Fresh Meat</li>
                            <li data-filter=".fresh-meat" id="itemlangpr">Fresh Food</li>
                            <li data-filter=".vegetables"id="itemlangpt">Fresh Fruits</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row" id="itemRow">

                </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('img/banner/banner-3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('img/banner/banner-4.png')}}" style="height:300px"alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4 >Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6 >Chinese Kale</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bell Pepper</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fired Chicken</h6>
                                        <span>MMK-2000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6 id="itemlangyq">Chinese Kale</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bell Pepper</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fired Chicken</h6>
                                        <span>MMK-2000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Chinese Kale</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bell Pepper</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fired Chicken</h6>
                                        <span>MMK-2000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Chinese Kale</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bell Pepper</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                         <h6>Fired Chicken</h6>
                                        <span>MMK-2000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Chinese Kale</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                       <h6>Bell Pepper</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                         <h6>Fired Chicken</h6>
                                        <span>MMK-2000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Chinese Kale</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                       <h6>Bell Pepper</h6>
                                        <span>MMK-500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fired Chicken</h6>
                                        <span>MMK-2000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2 id="itemlangyqi">From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-77.jpg')}}" id="imgfoot"alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5><a href="#" id="itemlangyqo">10days Diet Paln weight loss</a></h5>
                            <p id="itemlangyqp">The truth is that losing weight is easy, but only if done in the right manner. So here are my top 10 secrets to help you achieve your target weight this year, and not just that, these daily practices would also help you lead a healthier life. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-8.png')}}" alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5><a href="#" id="itemlangyqa">Cooking tips make cooking simple</a></h5>
                            <p id="itemlangyqs">Make meals a family affair with ideas for healthy foods and fun recipes that kids will ask for over and over again. Plus advice for how to deal with a picky eater, tips on food safety, and quick-and-easy dinners that help you make the most of your time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-9.png')}}" style='height:255px'alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5 ><a href="#" id="itemlangyqd">Making Breakfast Smoothies</a></h5>
                            <p id="itemlangyqf"> I tell them they can have a smoothie for breakfast! It’s an easy way to get plenty of fruits and/or veggies in their bodies at the beginning of the day. Many of these smoothie recipes also have oats, too, which makes them super filling. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 @endsection

