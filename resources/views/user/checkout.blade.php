@extends('user/layouts/app')
@section('content')
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
    <section class="breadcrumb-section set-bg justify-content-center">
        <img src="{{asset('img/shoes/qqq.png')}}" >

  </section>
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form ">
                <h4>Billing Details</h4>
                <form action="#">
                    <div class="row shadow">
                        <div class="col-lg-12 col-md-6 p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder=" Address" class="checkout__input__add">

                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text">
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>



                            {{-- <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                    placeholder="Notes about your order.">
                            </div> --}}
                        </div>


                               <button type="submit" class="site-btn col-12 m-2 ">Comfirm ORDER</button>



                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
