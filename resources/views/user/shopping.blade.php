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
     <section class="shoping-cart spad">

        <div class="container">
            <div style="overflow-x:auto;">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="shoping__cart__table">

                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th >Products</th>
                                        {{-- <th>Name</th> --}}
                                        <th>Price</th>
                                        <th >Qty </th>

                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">



                                </tbody>
                            </table>
                        </div>
                    </div>




                    <div class="col-lg-12 col-md-12">
                        <div class="checkout__order">
                            <div class="checkout__order__subtotal">Subtotal <span id="alltotal"></span></div>
                            {{-- <div class="checkout__order__subtotal">Delivery Charge <span></span></div> --}}
                            {{-- <div class="checkout__order__subtotal">Alltotal <span ></span></div> --}}

                                    <div class="shoping__checkout">

                                        <a href="{{route('user.checkout')}}" class="btn btn-outline-dark">BUY NOW</a>
                                    </div>
                                    </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>

        </div>



    </section>

   <script src="{{asset('js/main.js')}}"></script>


@endsection
