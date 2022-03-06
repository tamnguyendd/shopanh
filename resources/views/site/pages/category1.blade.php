@extends('site.app')
@section('title', $category->name)
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">


        <!-- ============================  FILTER TOP  ================================= -->
            <div class="card mb-3">
                <div class="card-body">
                    <ol class="breadcrumb float-left">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        @if($category->parent_id == 1)
                        <li class="breadcrumb-item active">{{ $category->name }}</li>
                        @else
                        <li class="breadcrumb-item"><a href="{{ route('category.show', $category->parent->slug) }}">{{ $category->parent->name }}</a></li>
                        <li class="breadcrumb-item active">{{ $category->name }}</li>
                        @endif
                    </ol>
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->
            <!-- ============================ FILTER TOP END.// ================================= -->

            <div class="row">
            @forelse($category->products as $product)
                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap"> 
                            <span class="badge badge-danger"> NEW </span>
                            <a href="{{ route('product.show', $product->slug) }}">
                            @if ($product->images->count() > 0)
                                <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
                            @else
                                <img src="https://via.placeholder.com/176" alt="">
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
            @empty
                <div class="mb-3 col-md-4">
                    <p>No Products found in {{ $category->name }}.</p>
                </div>
            @endforelse
            </div> <!-- row end.// -->

            <div class="row">
                <nav class="mb-3 col-md-4" aria-label="Page navigation sample">
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
            </div> <!-- row end.// -->

        </div>
    </section>


@stop