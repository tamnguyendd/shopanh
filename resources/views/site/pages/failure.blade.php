@extends('site.app')
@section('title', 'Order Error')
@section('content')


    <!-- ========================= SECTION CONTENT ========================= -->

    <section class="oops padding-y">

        <div class=content>
            <div class="wrapper-1">
                <div class="wrapper-2">
                    <h1>Oops !</h1>
                    <h2><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h2>
                    @if($error)
                    <p><strong>{{ $error }}</strong></p>

                    <p>But this order was placed into your Order</p>

                    <p>Please try payment again whole 24 hours or this order will be delete automatic.</p>
                    @endif
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