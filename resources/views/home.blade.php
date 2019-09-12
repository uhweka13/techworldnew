@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">Welcome Back <b>{{$detailsall['userdetails'][0]['name']}}</b></div>
    </div>
    <br>

    <div class="card" style="background: transparent;">

            <div class="card-columns">
                <div class="card bg-primary">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Name
                        <span class="badge badge-primary badge-pill">{{$detailsall['userdetails'][0]['name']}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Email
                        <span class="badge badge-primary badge-pill">{{$detailsall['userdetails'][0]['email']}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Account  Status
                        <span class="badge badge-primary badge-pill">{{$detailsall['userdetails'][0]['email_verified_at']}}</span>
                        </li>
                      </ul>
                </div>


                <div class="card bg-warning">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Wallet Balance
                          <span class="badge badge-primary badge-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Pending Deposit
                          <span class="badge badge-primary badge-pill">50</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Date Created
                          <span class="badge badge-primary badge-pill">99</span>
                        </li>
                      </ul>
                </div>


                <div class="card bg-success">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Name
                          <span class="badge badge-primary badge-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Email
                          <span class="badge badge-primary badge-pill">50</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Account Status
                          <span class="badge badge-primary badge-pill">99</span>
                        </li>
                      </ul>
                </div>

    </div>

    {{--------------------admin login---------------------}}
    @include('navs.adminbtn')












    {{---------------------buttons---------------------------------------------------}}

    <br>
    @include('navs.servicebtn')
    <br>

    {{--------------------data form--------------------}}
    <div class="card data-card">
        <div class="card-header">Header</div>
        <div class="card-body">
            
                <form action="/checkoutdata" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="email">Select Network:</label>
                        <select class="form-control" id="sel1" name="service">
                            <option>MTN</option>
                            <option disabled>Airtel</option>
                            <option disabled>GLO</option>
                            <option disabled>9Mobile</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Select Plan:</label>
                      <select class="form-control" id="sel1" name="servicelist">
                            <option value="1000">1GiG = #550</option>
                            <option value="2000">2GiG = #1000</option>
                            <option value="5000">5GiG = #2450</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="num">Enter Number:</label>
                            <input type="number" class="form-control" id="num" name="serviceNumber">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

        </div> 
        <div class="card-footer">Footer</div>
    </div>
    
</div>
@endsection
