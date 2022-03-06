@extends('site.app')
@section('title', $category->name)
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">


    <!-- ============================  FILTER TOP  ================================= -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"> Your are here: </div> <!-- col.// -->
                    <nav class="col-md-8"> 
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                            @if($category->parent_id == 1)
                            <li class="breadcrumb-item active">{{ $category->name }}</li>
                            @else
                            <li class="breadcrumb-item">{{ $category->parent->name }}</li>
                            <li class="breadcrumb-item active">{{ $category->name }}</li>
                            @endif
                        </ol>  
                    </nav> <!-- col.// -->
                </div> <!-- row.// -->
                <hr>
                <div class="row">
                    <div class="col-md-2">Filter by</div> <!-- col.// -->
                    <div class="col-md-10"> 
                        <form action="{{ route('category.show', $category->slug) }}" method="GET">
                            <ul class="list-inline">
                                
                                <li class="list-inline-item mr-3 dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">  Brand </a>
                                    <div class="dropdown-menu p-3">	

                                        @foreach($brands as $key => $value)
                                        
                                            @if(request()->has('brand'))
                                                @foreach(request()->brand as $brand)
                                                    @if($key == $brand)
                                                        <label class="form-check"> 	 <input type="checkbox" checked class="form-check-input" value="{{ $key }}" name="brand[]"> {{ $value }}    </label>
                                                        @break
                                                    @endif
                                                    @if($loop->last && $key != $brand)
                                                        <label class="form-check"> 	 <input type="checkbox" class="form-check-input" value="{{ $key }}" name="brand[]"> {{ $value }}    </label>
                                                    @endif
                                                @endforeach
                                            @else
                                            <label class="form-check"> 	 <input type="checkbox" class="form-check-input" value="{{ $key }}" name="brand[]"> {{ $value }}    </label>
                                            @endif
                                        @endforeach
                                    </div> <!-- dropdown-menu.// -->
                                </li>
                                
                                <li class="list-inline-item mr-3">
                                    <div class="form-inline">
                                        <label class="mr-2">Price</label>
                                        <input class="form-control form-control-sm" placeholder="Min" type="number" name="min_price">
                                        <span class="px-2"> - </span>
                                        <input class="form-control form-control-sm" placeholder="Max" type="number" name="max_price">
                                        <button type="submit" class="btn btn-sm btn-light ml-2">Ok</button>
                                    </div>
                                </li>
                                <!--
                                <li class="list-inline-item mr-3">
                                    <label class="custom-control mt-1 custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <div class="custom-control-label">Ready to ship</div>
                                    </label>
                                </li>
                                -->
                            </ul>
                        </form>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card-body .// -->
        </div> <!-- card.// -->
        <!-- ============================ FILTER TOP END.// ================================= -->

        <header class="mb-3">
            <div class="form-inline">
                <strong class="mr-md-auto">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} Items</strong>
                <form action="{{ route('category.show', $category->slug) }}" method="GET">
                    @if(request()->has('brand'))
                        @foreach(request()->brand as $brand)
                        <input style="display: none;" value="{{ $brand }}" name="brand[]">
                        @endforeach
                    @endif
                    @if(request()->has('min_price'))
                    <input style="display: none;" value="{{ request()->get('min_price') }}" name="min_price">
                    @endif
                    @if(request()->has('max_price'))
                    <input style="display: none;" value="{{ request()->get('max_price') }}" name="max_price">
                    @endif
					<select class="form-control" id="filter" name="filter">
						<option value="lastest" @if($orderBy == '' || $orderBy == 'lastest') selected @endif >Latest items</option>
						<option value="lowToHigh" @if($orderBy == 'lowToHigh') selected @endif >Price Low to High</option>
						<option value="highToLow" @if($orderBy == 'highToLow') selected @endif >Price High to Low</option>
					</select>
				</form>
            </div>
        </header><!-- sect-heading -->
        
        <div class="row">
            @forelse($products as $product)
                @if($product->status == 1)
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
                
                @else
                <div class="mb-3 col-md-4">
                    <p>No Products found in {{ $category->name }}.</p>
                </div>
                @endif
            @empty
                <div class="mb-3 col-md-4">
                    <p>No Products found in {{ $category->name }}.</p>
                </div>
            @endforelse
        </div> <!-- row end.// -->
        
        <div class="mb-4">
            @if($orderBy != '')
                @if(request()->get('brand'))
                    {{ $products->appends(['brand' => request()->get('brand'), 'min_price' => $_REQUEST['min_price'], 'max_price' => request()->get('max_price'), 'filter' => $orderBy ])->links() }}
                @elseif(request()->get('max_price'))
                    {{ $products->appends(['min_price' => request()->get('min_price'), 'max_price' => request()->get('max_price'), 'filter' => $orderBy ])->links() }}
                @else
                    {{ $products->appends(['filter' => $orderBy ])->links() }}
                @endif
            @else
                @if(request()->get('brand'))
                    {{ $products->appends(['brand' => request()->get('brand'), 'min_price' => $_REQUEST['min_price'], 'max_price' => request()->get('max_price') ])->links() }}
                @elseif(request()->get('max_price'))
                    {{ $products->appends(['min_price' => request()->get('min_price'), 'max_price' => request()->get('max_price') ])->links() }}
                @else
                    {{ $products->links() }}
                @endif
            @endif
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
        </nav> --}}

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
			var select = document.getElementById('filter');
			select.addEventListener('change', function(){
				this.form.submit();
			}, false);
		});
	</script>
@endpush