@extends('site.app')
@section('title', 'Orders')
@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-gray">
<div class="container">
	<h2 class="title-page">My account</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION PAGETOP END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

    <div class="row">
        @include('site.partials.profile_sidebar')

        @if (Session::has('message'))
            <p class="col-md-12 alert alert-success">{{ Session::get('message') }}</p>
        @endif
        @if (Session::has('error'))
            <p class="col-md-12 alert alert-danger">{{ Session::get('error') }}</p>
        @endif

        <main class="col-md-9 tab-content">
        <div class="card">
                <div class="card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Order No.</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Order Amount</th>
                        <th scope="col">Qty.</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->order_number }}</th>
                            <td>{{ $order->first_name }}</td>
                            <td>{{ $order->last_name }}</td>
                            <td>{{ config('settings.currency_symbol') }}{{ round($order->grand_total, 2) }}</td>
                            <td>{{ $order->item_count }}</td>
                            <td><span class="badge badge-success">{{ strtoupper($order->status) }}</span></td>
                        </tr>
                    @empty
                        <div class="col-sm-12">
                            <p class="alert alert-warning">No orders to display.</p>
                        </div>
                    @endforelse
                </tbody>
            </table>
</div>
</div>
	    </main> <!-- col.// -->
            
        
    </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection