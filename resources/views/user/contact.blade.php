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
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg justify-content-center">
        <img src="{{asset('img/shoes/qqq.png')}}" >

  </section>



    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p> +79-451-4143</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p> Corner of Pyay Road, Shin Saw Pu Rd,Yangon</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>24 hours</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>hello@freshfoodshop.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122203.56743454881!2d96.16424941056758!3d16.83322649447108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb43c3c35dad%3A0x6fddc640f2353863!2sCity%20Mart!5e0!3m2!1sen!2smm!4v1599907031942!5m2!1sen!2smm"  height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Yangon</h4>
                <ul>
                    <li>Phone: +79-451-4143</li>
                    <li>
                       Corner of Pyay Road, Shin Saw Pu Rd, Yangon</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row shadow">
                    <div class="col-lg-6 col-md-6 mt-4" >
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6 mt-4">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center accent-dark p-3">
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
