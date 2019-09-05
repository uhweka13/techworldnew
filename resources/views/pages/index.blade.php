@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="card carousal" style="width: 100%; height: 350px;">
      <div class="card-body carousal-body">
        <div class="caroual-text">
            <h1 class="top-text">Techworld, your one-stop point for all digital services</h1>
            <h5 class="top-text">such as Dataplans, Airtime VTU, Bill Payment...</h5>
        </div>
        <div class="carousal-btn">
          <button type="button" class="btn btn-1">Danger</button>
          <button type="button" class="btn btn-2">Danger</button>
        </div>
      </div>
    </div>
    <br><br>


    <div class="card-columns">
      <div class="card bg-primary" style="height: 200px;">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the first card</p>
        </div>
      </div>
      <div class="card bg-warning" style="height: 200px;">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the second card</p>
        </div>
      </div>
      <div class="card bg-success" style="height: 200px;">
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
          <img src="{{asset('img/MTN-Airtime.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
        <div class="col-sm center-products">
          <img src="{{asset('img/MTN-Airtime.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
        <div class="col-sm center-products">
          <img src="{{asset('img/MTN-Airtime.jpg')}}" alt="" style="border-radius: 4px; margin: 10px;">
        </div>
      </div>  
    </div>
    <br>

    <div class="card-group">
      <div class="card bg-primary">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the first card</p>
          <p class="card-text">Some more text to increase the height</p>
          <p class="card-text">Some more text to increase the height</p>
          <p class="card-text">Some more text to increase the height</p>
        </div>
      </div>
      <div class="card bg-warning">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the second card</p>
        </div>
      </div>



  </div>
@endsection