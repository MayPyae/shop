
<div class="pb-5 ">
<form id="language">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{route('user.index')}}"> <img src="{{asset('img/shoes/logo1.png')}}" style="height:50px"></a>
  <div class="col-lg-2 p-0">


    <a href="{{route('user.shopping')}}" class="btn btn-outline-dark" >
        <span class="fa fa-shopping-cart"></span> <span class="badge badge-light" id="countText">0 </span>

    </a>



</div>
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
                                                        <label class="btn btn-dark ">
                                                            <input
                                                            type="radio"
                                                            value="mm"
                                                            name="options"
                                                            id="option1"
                                                            autocomplete="off"

                                                            />
                                                            MM
                                                        </label>
                                                        <label class="btn btn-dark ">
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


        </div>
    </div>
    </nav>
  </form>
</div>
