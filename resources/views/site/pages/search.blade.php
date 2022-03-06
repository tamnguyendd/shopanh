@extends('site.app')
@section('title', 'Search')
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">


<!-- ============================  FILTER TOP  ================================= -->
<div class="card mb-3">
	<div class="card-body">
<div class="row">
	<div class="col-md-12"> Your are searching: <strong>{{ $search }}</strong></div> <!-- col.// -->
</div> <!-- row.// -->
<hr>
<div class="row">
	<div class="col-md-8">Search Area: <strong>
			{{ $cat_name }}
	</strong></div> <!-- col.// -->
	<div class="col-md-4">
		<div class="form-inline">
			<strong class="ml-md-auto">{{ $products->total() }} Items found </strong>
			
		</div>
	</div>
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->
<!-- ============================ FILTER TOP END.// ================================= -->
		<header class="mb-3">
            <div class="form-inline">
				<strong class="mr-md-auto">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} Items</strong>
				<form action="{{ route('search.result') }}" method="GET">
					<input style="display: none;" type="text" name="category_name" value="{{ $_REQUEST['category_name'] }}">
					<input style="display: none;" type="text" name="search" value="{{ $_REQUEST['search'] }}">
					<select class="form-control" id="filter_search" name="filter">
						<option value="lastest" @if($orderBy == '' || $orderBy == 'lastest') selected @endif >Latest items</option>
						<option value="lowToHigh" @if($orderBy == 'lowToHigh') selected @endif >Price Low to High</option>
						<option value="highToLow" @if($orderBy == 'highToLow') selected @endif >Price High to Low</option>
					</select>
				</form>
            </div>
        </header><!-- sect-heading -->
		
<div class="row productshow">
	@foreach( $products as $product )
                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            {{-- $product->created_at->diffInDays(Carbon\Carbon::now()) < 30 --}}
                            @if( Carbon\Carbon::now()->subMonth()->lt($product->created_at) )
                            <span class="badge badge-danger"> NEW </span>
                            @endif
                            <a href="{{ route('product.show', $product->slug) }}">
                            @if ($product->images->count() > 0)
                                <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
                            @else
                                <img src="{{ asset('frontend/images/noimage.jpg') }}" alt="">
                            @endif
                            @if( $sale && $product->sale_price > 0)
                                <div class="badge-saleoff-overlay">
                                    <!-- Change Badge Position, Color, Text here-->
                                    <span class="top-right badge-saleoff orange">Sale {{ sale_percent($product->price,$product->sale_price)}} OFF</span>
                                </div>
                            @endif
                            </a>
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                                <a href="{{ route('product.show', $product->slug) }}" class="title mb-2 h5">{{ $product->name }}</a>
                                <div class="price-wrap">
                                @if( $sale && $product->sale_price > 0)
                                    
                                    <span class="price"> {{ config('settings.currency_symbol').number_format($product->sale_price) }} </span>
                                    
                                    <del class="price-old"> {{ config('settings.currency_symbol').number_format($product->price) }}</del>
                                    
                                @else
                                    
                                    <span class="price"> {{ config('settings.currency_symbol').number_format($product->price) }} </span>
                                    
                                @endif 
                                </div> <!-- price-wrap.// -->
                                
                                <p class="text-muted ">{{ $product->summary }}</p>
                            
                                <hr>
                                
                                <p class="mb-3">
                                    <span class="tag"> <i class="fa fa-check"></i> Verified</span> 
                                    <span class="tag"> 4 Years </span> 
                                    <span class="tag"> 60 reviews </span>
                                    <span class="tag"> {{ $product->brand->name }} </span>
                                </p>
                            
                                <a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
                                
                        </figcaption>
                    </figure>
                </div> <!-- col.// -->
	@endforeach

	{{--
	<div class="col-md-3">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img src="https://bootstrap-ecommerce.com/templates/alistyle-html/images/items/1.jpg">
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
					<a href="#" class="title mb-2">Cheap and Best demo clothe with latest Fashion styles for Men</a>
					<div class="price-wrap">
						<span class="price">$325.00-$390.00</span> 
						<small class="text-muted">/per bag</small>
					</div> <!-- price-wrap.// -->
					
					<p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
					
					<p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
				   
					<hr>
					
					<p class="mb-3">
						<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
						<span class="tag"> 4 Years </span> 
						<span class="tag"> 60 reviews </span>
						<span class="tag"> China </span>
					</p>
				
					<label class="custom-control mb-3 custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <div class="custom-control-label">Add to compare
					  </div>
					</label>

					<a href="#" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact supplier </a>	
					
			</figcaption>
		</figure>
	</div> <!-- col.// -->
		--}}
</div> <!-- row end.// -->
<div class="mb-4">
	{{ $products->appends(['category_name' => $_REQUEST['category_name'], 'search' => $_REQUEST['search'], 'filter' => $orderBy ])->links() }}
</div>
{{--
<nav class="mb-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>--}}


<div class="box text-center">
	<p>Did you find what you were looking for？</p>
	<a href="" class="btn btn-light">Yes</a>
	<a href="" class="btn btn-light">No</a>
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= SECTION SUBSCRIBE  ========================= -->
<section class="padding-y-lg bg-light border-top">
<div class="container">

<p class="pb-2 text-center">Delivering the latest product trends and industry news straight to your inbox</p>

<div class="row justify-content-md-center">
	<div class="col-lg-4 col-sm-6">
<form class="form-row">
		<div class="col-8">
		<input class="form-control" placeholder="Your Email" type="email">
		</div> <!-- col.// -->
		<div class="col-4">
		<button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
		</div> <!-- col.// -->
</form>
<small class="form-text">We’ll never share your email address with a third-party. </small>
	</div> <!-- col-md-6.// -->
</div>
	

</div>
</section>
<!-- ========================= SECTION SUBSCRIBE END// ========================= -->
@stop
@push('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			var select = document.getElementById('filter_search');
			select.addEventListener('change', function(){
				this.form.submit();
			}, false);
			/*
			$("#filter_search").on('change', function(){
				var value = $(this).val();
				//alert(value);

				$.ajax({
					type: 'GET',
					url: "",
					data: 'request=' + value,
					beforeSend:function(){
						$(".productshow").html("<span>Loading...</span>");
					},
					success:function(data){
						$(".productshow").html(data);
					}
				});
			});
			*/
		});
	</script>
@endpush