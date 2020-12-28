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
                            <li><a href="#" id="itemlangj">Shoes</a></li>
                                <li><a href="#" id="itemlangk">Heads</a></li>
                                <li><a href="#"id="itemlangl">Bags</a></li>
                                <li><a href="#"id="itemlangz">Men</a></li>
                                <li><a href="#"id="itemlangx">Women</a></li>
                                <li><a href="#"id="itemlangc">T-shirt</a></li>
                                <li><a href="#"id="itemlangv">Shoes</a></li>
                                <li><a href="#"id="itemlangb">Heads</a></li>
                                <li><a href="#"id="itemlangn">Bags</a></li>
                                <li><a href="#"id="itemlangm">Men</a></li>
                                <li><a href="#"id="itemlangqq">Women</a></li>
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
                    <div class="hero__item set-bg" >
                       <img src="{{asset('img/shoes/ww.jpg')}}" id="coverpt"style="height:400px width:300px" >
                        <div class="hero__text m-4" style="position: absolute">

                            <img src="{{asset('/img/shoes/logo1.png')}}" alt="">

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
                             <img src="{{asset('/img/shoes/b.png')}}" alt="">
                            <h5><a href="{{route('user.promo')}}" >Shoes</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" >
                             <img src="{{asset('/img/shoes/a.png')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">Shoes</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('/img/shoes/c.png')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">Shoes</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('/img/shoes/d.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">Shoes</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="{{asset('/img/shoes/h1.jpg')}}" alt="">
                            <h5><a href="{{route('user.promo')}}">Head</a></h5>
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

    {{-- <!-- Banner Begin -->
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
    <!-- Banner End --> --}}

    <!-- Latest Product Section Begin -->
    {{-- <section class="latest-product spad">
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
    </section> --}}
    <!-- Latest Product Section End -->


 @endsection

