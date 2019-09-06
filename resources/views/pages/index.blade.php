@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card carousal" style="width: 100%; height: 350px;">
      <div class="card-body carousal-body">
        <div class="caroual-text">
            <h1 class="top-text">Techworld, your one-stop point for all digital services</h1>
            <h5 class="top-text">such as Dataplans, Airtime VTU, Bill Payment...</h5>
        </div>
        <div class="carousal-btn">
          <button type="button" class="btn btn-1">LogIn</button>
          <button type="button" class="btn btn-2">Register</button>
        </div>
      </div>
    </div>
    <br><br>


    <div class="card-columns">
      <div class="card bg-default" style="height: 200px;">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the first card</p>
        </div>
      </div>
      <div class="card bg-default" style="height: 200px;">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the second card</p>
        </div>
      </div>
      <div class="card bg-default" style="height: 200px;">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the third card</p>
        </div>
      </div>
    </div>
    <br><br>

      <h1 style="text-align: center; color: white;">Our Product</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm center-products">
          <img src="{{asset('img/MTN-Airtime.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
        <div class="col-sm center-products">
          <img src="{{asset('img/Gotv-Payment.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
        <div class="col-sm center-products">
          <img src="{{asset('img/Startimes-Subscription.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
        <div class="col-sm center-products">
          <img src="{{asset('img/Jos-Electric-JED.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
      </div>  
    </div>
    <br>

    <div class="card-group">
      <div class="card" style="background: transparent;">
        {{-- <div class="card-body" > --}}


            {{------------------slide show----------------}}
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/ttt.jpg')}}" alt="Los Angeles" width="100%">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/ttt1.jpg')}}" alt="Chicago" width="100%">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/ttt2.jpg')}}" alt="New York" width="100%">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>


        {{-- </div> --}}
      </div>
      <div class="card bg-warning">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the second card</p>
        </div>
      </div>



  </div>
@endsection