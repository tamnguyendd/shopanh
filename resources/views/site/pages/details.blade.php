@extends('site.app')
@section('title', $product->name)

@section('content')
<section class="py-3 bg-light">
  <div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
			@if($category->parent_id == 1)
			<li class="breadcrumb-item"><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
			@else
			<li class="breadcrumb-item">{{ $category->parent->name }}</li>
			<li class="breadcrumb-item"><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
			@endif
		</ol>
  </div>
</section>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
	<div class="container">
		<div class="row mb-3">
			<div class="col-sm-12">
				@if (Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }}</p>
				@endif
				@if (Session::has('error'))
					<p class="alert alert-danger">{{ Session::get('error') }}</p>
				@endif
			</div>
		</div>
	<!-- ============================ ITEM DETAIL ======================== -->
		<div class="row">
			<aside class="col-md-6">
				<div class="card">
					<article class="gallery-wrap"> 
						<div class="img-big-wrap">
							@if ($product->images->count() > 0)
								<!-- Expanded image -->
								<div id="expandedDiv"> <a class="fancybox" href="{{ asset('storage/'.$product->images->first()->full) }}" title="" target="_blank"><img src="{{ asset('storage/'.$product->images->first()->full) }}"></a></div>
							@else
								<div> <img src="https://via.placeholder.com/176"></div>
							@endif
						</div> <!-- slider-product.// -->
						@if ($product->images->count() > 0)
							<div class="thumbs-wrap">
							@foreach($product->images as $image)
								<div class="item-thumb"> <img src="{{ asset('storage/'.$image->full) }}" onclick="myGallery(this);"></div>
							@endforeach
							</div> <!-- slider-nav.// -->
						@endif
					</article> <!-- gallery-wrap .end// -->
				</div> <!-- card.// -->
			</aside>

			<main class="col-md-6">
				<article class="product-info-aside">

					<h2 class="title mt-3">{{ $product->name }}</h2>

					<div class="rating-wrap my-3">
						<ul class="rating-stars">
							<li style="width:80%" class="stars-active"> 
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
							</li>
							<li>
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
								<i class="fa fa-star"></i> 
							</li>
						</ul>
						<small class="label-rating text-muted">132 reviews</small>
						<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
					</div> <!-- rating-wrap.// -->

					<div class="mb-3"> 
						@if ($sale && $product->sale_price > 0)
						<span class="currency">{{ config('settings.currency_symbol') }}</span><var class="price h4"  id="productPrice">{{ $product->sale_price }}</var> 
						<span class="text-muted">{{ config('settings.currency_symbol') }} {{ $product->price }}</span>
						@else
						<span class="currency">{{ config('settings.currency_symbol') }}</span><var class="price h4"  id="productPrice">{{ $product->price }}</var> 
						@endif
					</div> <!-- price-detail-wrap .// -->

					{!! $product->overview !!}

					
						
					<hr>
					<form method="POST" role="form" id="addToCart" action="{{ route('product.add') }}">
						@csrf

						<div class="form-row mt-3">
							<dl class="dlist-inline">
								@foreach($attributes as $attribute)
									@php $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray()) @endphp
									@if ($attributeCheck)
										<dt>{{ $attribute->name }}: </dt>
										<dd>
											<select class="form-control form-control-sm option" style="width:180px;" name="{{ strtolower($attribute->name ) }}">
												<option data-price="0" value="0"> Select a {{ $attribute->name }}</option>
												@foreach($product->attributes as $attributeValue)
													@if ($attributeValue->attribute_id == $attribute->id)
														<option
															data-price="{{ $attributeValue->price }}"
															value="{{ $attributeValue->value }}"> {{ ucwords($attributeValue->value . ' +'. $attributeValue->price) }}
														</option>
													@endif
												@endforeach
											</select>
										</dd>
									@endif
								@endforeach
							</dl>
						</div>
						<div class="form-row mt-3">
							<div class="col-sm-12">
								<dl class="dlist-inline">
									<dt>Quantity: </dt>
									<dd>
										
										<input class="form-control form-control-sm" type="number" min="1" value="1" max="{{ $product->quantity }}" name="qty" style="width:70px;">
										<input type="hidden" name="productId" value="{{ $product->id }}">
										<input type="hidden" name="price" id="finalPrice" value="{{ $product->sale_price != '' ? $product->sale_price : $product->price }}">
									</dd>
								</dl>
							</div>
						</div>

						<div class="form-row mt-3">
							<button type="submit" class="btn  btn-primary" name="addTo" value="cart"> 
								<i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span> 
							</button>
							<button type="submit" class="btn  btn-danger ml-2" name="addTo" value="wishlist"> 
								<i class="fas fa-heart"></i> <span class="text">Add to wishlist</span> 
							</button>
						</div> <!-- row.// -->
					</form> <!-- form.// -->

					<!-- The Modal -->
					<div id="myModal" class="modal">
						<!-- Modal content -->
						<div class="modal-content">
							<span class="close_popup_show">&times;</span>
							<p>Please select an option</p>
							<div class="clearfix"></div>
						</div>
					</div>

				</article> <!-- product-info-aside .// -->
			</main> <!-- col.// -->
		</div> <!-- row.// -->

		<!-- ================ ITEM DETAIL END .// ================= -->


	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
	<div class="container">

		<div class="row">
			<div class="col-md-8">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#description">Description</a>
					</li>
					@if( $product->specification != '')
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#specifications">Specifications</a>
					</li>
					@endif
				</ul>

				<!-- Tab panes -->
				<div class="tab-content card card-body">
					<div class="tab-pane container active" id="description">
						{!! $product->description !!}
					</div>
					@if( $product->specification != '')
					<div class="tab-pane container fade" id="specifications">
						{!! $product->specification !!}
					</div>
					@endif
				</div>

			</div> <!-- col.// -->
			
			<aside class="col-md-4">

				<div class="box">
					<h5 class="title-description">Related Products</h5>
			
					@foreach($related_products as $r_product)
					<article class="media mb-3">
						<a href="{{ route('product.show', $r_product->slug) }}">
						@if ($r_product->image != '')
							<img class="img-sm mr-3" src="{{ asset('storage/'.$r_product->image) }}" alt="{{ $r_product->name }}">
						@else
							<img class="img-sm mr-3" src="{{ asset('frontend/images/noimage.jpg') }}" alt="{{ $r_product->name }}">
						@endif
						</a>
						<div class="media-body">
							<h6 class="mt-0"><a href="{{ route('product.show', $r_product->slug) }}">{{ $r_product->name }}</a></h6>
							<p class="mb-2">{{ $r_product->summary }}</p>
						</div>
					</article>
					@endforeach


					<h5 class="title-description">Best Seller Products</h5>
			
					@foreach($popular_products as $p_product)
					<article class="media mb-3">
						<a href="{{ route('product.show', $p_product->slug) }}">
						@if ($p_product->image != '')
							<img class="img-sm mr-3" src="{{ asset('storage/'.$p_product->image) }}" alt="{{ $p_product->name }}">
						@else
							<img class="img-sm mr-3" src="{{ asset('frontend/images/noimage.jpg') }}" alt="{{ $p_product->name }}">
						@endif
						</a>
						<div class="media-body">
							<h6 class="mt-0"><a href="{{ route('product.show', $p_product->slug) }}">{{ $p_product->name }}</a></h6>
							<p class="mb-2">{{ $p_product->summary }}</p>
						</div>
					</article>
					@endforeach

				
				</div> <!-- box.// -->
			</aside> <!-- col.// -->
		</div> <!-- row.// -->

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
@stop

@push('scripts')
    <script>
        $(document).ready(function () {
			$('.fancybox').fancybox();

            $('#addToCart').submit(function (e) {
				var elements = document.getElementsByClassName('option');
				
				for (value of elements) {
				　	if ($(value).val() == 0) {
						e.preventDefault();
						popup_show();
						//alert('Please select an option');
						break;
					}
				}

            });
			
            $('.option').change(function () {
                $('#productPrice').html("{{ $product->sale_price != '' ? $product->sale_price : $product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
		
		function popup_show(){
			// Get the modal
			var modal = document.getElementById("myModal");
			// Get the modal-content
			//var content = document.getElementsByClassName("modal-content")[0];
			// set message
			//$(content).find('p')[0].text($mess);
			// Get the button that opens the modal
			//var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close_popup_show")[0];

			// When the user clicks on the button, open the modal
			/*
			btn.onclick = function() {
				modal.style.display = "block";
			}
			*/

			modal.style.display = "block";

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		}

		function myGallery(imgs) {
			// Get the expanded image div
			//var expandImg = document.getElementById("expandedImg");
			var expandImg = $('#expandedDiv').find('img');
			var expandA = $('#expandedDiv').find('a');
			// Use the same src in the expanded image as the image being clicked on from the grid
			expandImg[0].src = imgs.src;
			expandA[0].href = imgs.src;
			// Show the container element (hidden with CSS)
			expandImg[0].parentElement.style.display = "block";
		}
		document.addEventListener('touchstart', function() {}, {passive: true});
    </script>
@endpush