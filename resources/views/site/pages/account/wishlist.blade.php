@extends('site.app')
@section('title', $profile->last_name."'s Wish List")
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

            <main class="col-md-9 tab-content">

            @if (Session::has('message'))
                <p class="col-md-12 alert alert-success">{{ Session::get('message') }}</p>
            @endif
            @if (Session::has('error'))
                <p class="col-md-12 alert alert-danger">{{ Session::get('error') }}</p>
            @endif

                <article class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <figure class="itemside mb-4">
                                    <div class="aside"><img src="https://via.placeholder.com/176" class="border img-md"></div>
                                    <figcaption class="info">
                                        <a href="#" class="title">Great product name goes here</a>
                                        <p class="price mb-2">$80</p>
                                        <a href="#" class="btn btn-secondary btn-sm"> Add to cart </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->

                            <div class="col-md-6">
                                <figure class="itemside mb-4">
                                    <div class="aside"><img src="https://via.placeholder.com/176" class="border img-md"></div>
                                    <figcaption class="info">
                                        <a href="#" class="title">Men's Jackeet for Winter </a>
                                        <p class="price mb-2">$1280</p>
                                        <a href="#" class="btn btn-secondary btn-sm"> Add to cart </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->

                            <div class="col-md-6">
                                <figure class="itemside mb-4">
                                    <div class="aside"><img src="https://via.placeholder.com/176" class="border img-md"></div>
                                    <figcaption class="info">
                                        <a href="#" class="title">Another book of item goes here </a>
                                        <p class="price mb-2">$280</p>
                                        <a href="#" class="btn btn-secondary btn-sm"> Add to cart </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                        </div> <!-- row .//  -->

                    </div> <!-- card-body.// -->
                </article>

            </main> <!-- col.// -->
            
        
        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection