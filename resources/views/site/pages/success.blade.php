@extends('site.app')
@section('title', 'Order Completed')
@section('content')


    <!-- ========================= SECTION CONTENT ========================= -->

    <section class="thank padding-y">

        <div class=content>
            <div class="wrapper-1">
                <div class="wrapper-2">
                    <h1>Thank you !</h1>
                    <h2><i class="fa fa-check" aria-hidden="true"></i></h2>
                    <p>Thanks for your order  </p>
                    <p>with ID: <strong>{{ $order_number }}</strong></p>
                    <p>It has been placed successfully.  </p>
                    <p class="lead mt-3">
                        <a class="btn go-home" href="{{ url('/')}}" role="button">Home Page</a>
                        
                        <a class="btn go-detail ml-1" href="{{ url('/account/orders')}}" role="button">Order Details</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop

@push('styles')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
@endpush