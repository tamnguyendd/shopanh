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
                        <ul class="list-inline">
                            <li class="list-inline-item mr-3 dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">   Supplier type </a>
                                <div class="dropdown-menu p-3" style="max-width:400px;">	
                                    <label class="form-check">
                                        <input type="radio" name="myfilter" class="form-check-input"> Good supplier
                                    </label>
                                    <label class="form-check">	
                                        <input type="radio" name="myfilter" class="form-check-input"> Best supplier
                                    </label>
                                    <label class="form-check">
                                        <input type="radio" name="myfilter" class="form-check-input"> New supplier
                                    </label>
                                </div> <!-- dropdown-menu.// -->
                            </li>
                            <li class="list-inline-item mr-3 dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">  Country </a>
                                <div class="dropdown-menu p-3">	
                                    <label class="form-check"> 	 <input type="checkbox" class="form-check-input"> China    </label>
                                    <label class="form-check">   	 <input type="checkbox" class="form-check-input"> Japan      </label>
                                    <label class="form-check">    <input type="checkbox" class="form-check-input"> Uzbekistan  </label>
                                    <label class="form-check">  <input type="checkbox" class="form-check-input"> Russia     </label>
                                </div> <!-- dropdown-menu.// -->
                            </li>
                            <li class="list-inline-item mr-3 dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Feature</a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Anti backterial</a>
                                    <a href="" class="dropdown-item">With buttons</a>
                                    <a href="" class="dropdown-item">Extra safety</a>
                                </div>
                            </li>
                            <li class="list-inline-item mr-3 dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">  Color </a>
                                <div class="dropdown-menu p-3">	
                                    <label class="form-check"><input type="checkbox" class="form-check-input"> Black</label>
                                    <label class="form-check"><input type="checkbox" class="form-check-input"> White</label>
                                    <label class="form-check"><input type="checkbox" class="form-check-input"> Red</label>
                                    <label class="form-check"><input type="checkbox" class="form-check-input"> Blue</label>
                                </div> <!-- dropdown-menu.// -->
                            </li>
                            <li class="list-inline-item mr-3"><a href="#">Size</a></li>
                            <li class="list-inline-item mr-3">
                                <div class="form-inline">
                                    <label class="mr-2">Price</label>
                                    <input class="form-control form-control-sm" placeholder="Min" type="number">
                                    <span class="px-2"> - </span>
                                    <input class="form-control form-control-sm" placeholder="Max" type="number">
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
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card-body .// -->
        </div> <!-- card.// -->
        <!-- ============================ FILTER TOP END.// ================================= -->

        <header class="mb-3">
            <div class="form-inline">
                <strong class="mr-md-auto">32 Items found </strong>
                <select class="mr-2 form-control">
                    <option>Latest items</option>
                    <option>Trending</option>
                    <option>Most Popular</option>
                    <option>Cheapest</option>
                </select>
                <div class="btn-group">
                    <a href="{{ url('/search/1') }}" class="btn btn-light" data-toggle="tooltip" title="List view"> 
                        <i class="fa fa-bars"></i></a>
                    <a href="{{ url('/search/2') }}" class="btn btn-light active" data-toggle="tooltip" title="Grid view"> 
                        <i class="fa fa-th"></i></a>
                </div>
            </div>
        </header><!-- sect-heading -->
        
        <div class="row">
            @forelse($category->products as $product)
                @if($product->status == 1)
                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            <span class="badge badge-danger"> NEW </span>
                            <a href="{{ route('product.show', $product->slug) }}">
                            @if ($product->images->count() > 0)
                                <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
                            @else
                                <img src="{{ asset('frontend/images/noimage.jpg') }}" alt="">
                            @endif
                            </a>
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                                <a href="{{ route('product.show', $product->slug) }}" class="title mb-2 h5">{{ $product->name }}</a>
                                <div class="price-wrap">
                                @if ($product->sale_price != 0)
                                    
                                    <span class="price"> {{ config('settings.currency_symbol').$product->sale_price }} </span>
                                    <small class="text-muted">/per bag</small>
                                    <del class="price-old"> {{ config('settings.currency_symbol').$product->price }}</del>
                                    
                                @else
                                    
                                    <span class="price"> {{ config('settings.currency_symbol').$product->price }} </span>
                                    <small class="text-muted">/per bag</small>
                                    
                                @endif 
                                </div> <!-- price-wrap.// -->
                                
                                <p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
                                
                                <p class="text-muted ">{{ Str::words($product->description,20) }}</p>
                            
                                <hr>
                                
                                <p class="mb-3">
                                    <span class="tag"> <i class="fa fa-check"></i> Verified</span> 
                                    <span class="tag"> 4 Years </span> 
                                    <span class="tag"> 60 reviews </span>
                                    <span class="tag"> {{ $product->brand->name }} </span>
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
        </nav>

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

@endpush