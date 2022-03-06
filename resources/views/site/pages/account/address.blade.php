@extends('site.app')
@section('title', 'Address List')
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

            <a href="#" class="btn btn-light mb-3"> <i class="fa fa-plus"></i> Add new address </a>

            <div class="row">
                <div class="col-md-6">
                    <article class="box mb-4">
                        <h6>London, United Kingdom</h6>
                        <p>Building: Nestone <br> Floor: 22, Aprt: 12  </p>
                        <a href="#" class="btn btn-light disabled"> <i class="fa fa-check"></i> Default</a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                    </article>
                </div>  <!-- col.// -->
                <div class="col-md-6">
                    <article class="box mb-4">
                        <h6>Tashkent, Uzbekistan</h6>
                        <p>Building one <br> Floor: 2, Aprt: 32  </p>
                        <a href="#" class="btn btn-light">Make default</a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                    </article>
                </div>  <!-- col.// -->
                <div class="col-md-6">
                    <article class="box mb-4">
                        <h6>Moscow, Russia</h6>
                        <p>Lenin street <br> Building A, Floor: 3, Aprt: 32  </p>
                        <a href="#" class="btn btn-light">Make default</a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                    </article>
                </div>  <!-- col.// -->
            </div> <!-- row.// -->

	    </main> <!-- col.// -->
            
        
    </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection