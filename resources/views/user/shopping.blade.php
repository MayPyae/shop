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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('user.index')}}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <th>Qty </th>

                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    {{-- <td  id="itemPromo"></td> --}}



                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12">
                        <div class="checkout__order">
                            <div class="checkout__order__subtotal">Subtotal <span id="alltotal"></span></div>
                            <div class="checkout__order__subtotal">Delivery Charge <span></span></div>
                            <div class="checkout__order__subtotal">Alltotal <span ></span></div>

                                    <div class="shoping__checkout">

                                        <a href="{{route('user.checkout')}}" class="primary-btn">BUY NOW</a>
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
