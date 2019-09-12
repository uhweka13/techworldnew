@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card checkout">
            <div class="card-body">Order Details

                <ul class="list-group checkout-main">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Network
                      <span class="badge badge-primary badge-pill">12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Phone Number
                      <span class="badge badge-primary badge-pill">50</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Data Amount
                      <span class="badge badge-primary badge-pill">99</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Total Amount
                        <span class="badge badge-primary badge-pill">99</span>
                    </li>
                  </ul>
                    <br>
                    <h4>Pay With</h4>
                  <button type="button" class="btn btn-success">Card</button>
                  <button type="button" class="btn btn-success">Wallet</button>
            </div>
        </div>
    </div>
@endsection