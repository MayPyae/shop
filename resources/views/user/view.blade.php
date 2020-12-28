@extends('user/layouts/app')
@section('content')


<link rel="stylesheet" href="{{asset('css/view.css')}}" />
    <div class="container">
      <div class="card">
        <div class="shoeBackground">
          <div class="gradients">
            <div class="gradient second" color="blue"></div>
            <div class="gradient" color="red"></div>
            <!-- <div class="gradient" color="green"></div> -->
            <div class="gradient" color="black"></div>
            <div class="gradient" color="skyblue"></div>
          </div>
          <h1 class="nike">nike</h1>
          <img src="{{asset('img/shoes/logo.png')}}" alt="" class="logo" />
          <!-- <a href="#" class="share"><i class="fa fa-share-alt"></i></a> -->
          <img src="{{asset('img/shoes/blue.png')}}" alt="" class="shoe show" color="blue" />
          <img src="{{asset('img/shoes/red.png')}}" alt="" class="shoe" color="red" />
          <!-- <img src="green.png" alt="" class="shoe" color="green" /> -->
          <img src="{{asset('img/shoes/black.png')}}" alt="" class="shoe" color="black" />
          <img src="{{asset('img/shoes/skyblue.png')}}"alt="" class="shoe" color="skyblue" />
        </div>
        <div class="info">
          <div class="shoeName">
            <div>
              <h1 class="big">Nike Zoom KD 12</h1>
              <span class="new">new</span>
            </div>
            <h3 class="small">Men's running shoes</h3>
          </div>
          {{-- <div class="description">
            <h3 class="title">Product Info</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
          </div> --}}
          <div class="color-container">
            <h3 class="title">Color</h3>
            <div class="colors">
              <span class="color active" primary="#46556a" color="blue"></span>
              <span class="color" primary="#cd313e" color="red"></span>
              <!-- <span class="color" primary="#aaeb26" color="green"></span> -->
              <span class="color" primary="#262729" color="black"></span>
              <span class="color" primary="#00bae9" color="skyblue"></span>
            </div>
          </div>
          <div class="size-container">
            <h3 class="title">size</h3>
            <div class="sizes">
              <span class="size">7</span>
              <span class="size">8</span>
              <span class="size">9</span>
              <span class="size">10</span>
              <span class="size">11</span>
            </div>
          </div>
          <div class="buy-price" >
            <a href="{{route('user.checkout')}}" class="buy"
              >
              <i class="fa fa-shopping-cart" ></i>Buy Now</a
            >
            <div class="price">
              <i class="fa fa-dollar"></i>
              <h1>180.00</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/shoe.js')}}"></script>




@endsection
