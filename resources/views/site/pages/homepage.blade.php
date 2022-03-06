@extends('site.app')
@section('title', 'Home')

@section('content')
    <div class="container">
        <!-- ========================= SECTION MAIN  ========================= -->
        <section class="section-main padding-y">

            <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
            <ul class="top-slider">
                @foreach($slides as $slide)
                <li><a href="{{ $slide->link }}"><img src="{{ asset('storage/'.$slide->image) }}" alt="{{ $slide->title }}"></a></li>
                @endforeach
            </ul>
            <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->	

        </section>
        <!-- ========================= SECTION MAIN END// ========================= -->


        @if($sale)
        <!-- =============== SECTION DEAL =============== -->
        <section class="padding-bottom">
            <div class="card card-deal">
                <div class="col-heading content-body">
                    <header class="section-heading">
                        <h3 class="section-title">Deals and offers</h3>
                        <p>Hygiene equipments</p>
                    </header><!-- sect-heading -->
                    <div class="timer" data-countdown="{{ $sale->sale_exp }}">
                    </div>
                </div> <!-- col.// -->
                <div class="row no-gutters items-wrap">
                    @foreach($categories as $category)
                        @if($category->id != 1)
                            @foreach($category->products as $product)
                                @if($product->sale_price > 0)
                                    <div class="col-md col-6">
                                        <figure class="card-product-grid card-sm">
                                            <a href="{{ route('product.show', $product->slug) }}" class="img-wrap"> 
                                                @if ($product->images->count() > 0)
                                                <img class="" src="{{ asset('storage/'.$product->images->first()->full) }}"> 
                                                @else
                                                <img class="img-sm float-right" src="{{ asset('frontend/images/noimage.jpg') }}"> 
                                                @endif
                                            </a>
                                            <div class="text-wrap p-3">
                                                <a href="{{ route('product.show', $product->slug) }}" class="title">{{ $product->name }}</a>
                                                @if( Carbon\Carbon::now()->subMonth()->lt($product->created_at) )
                                                    <span class="badge badge-danger"> NEW </span>
                                                @endif
                                                <span class="badge badge-danger"> SALE {{ sale_percent($product->price,$product->sale_price)}} OFF</span>
                                            </div>
                                        </figure>
                                    </div> <!-- col.// -->
                                    @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>

        </section>
        <!-- =============== SECTION DEAL // END =============== -->
        @endif
        <!-- =============== SECTION 1 =============== -->
        @foreach($categories as $category)
        @if($category->id != 1)
        <section class="padding-bottom">
            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">{{ $category->name }}</h4>
            </header>

            <div class="card card-home-category">
                <div class="row no-gutters">
                    <div class="col-md-3">
                    
                        <div class="home-category-banner bg-light-orange">
                            <h5 class="title">{{ $category->description }}</h5>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a href="{{ route('category.show', $category->slug) }}" class="btn btn-outline-primary rounded-pill">Source now</a>
                            @if($category->image == '')
                            <img src="https://bootstrap-ecommerce.com/templates/alistyle-html/images/items/2.jpg" class="img-bg">
                            @else
                            <img src="{{ asset('storage/'.$category->image) }}" class="img-bg">
                            @endif
                        </div>

                    </div> <!-- col.// -->
                    <div class="col-md-9">
                        <ul class="row no-gutters bordered-cols">
                            @foreach($category->products as $product)
                            @if($loop->remaining < 8)
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="{{ route('product.show', $product->slug) }}" class="item"> 
                                    <div class="card-body">
                                        <h6 class="title">{{ $product->name }}</h6>
                                        @if ($product->images->count() > 0)
                                        <img class="img-sm float-right" src="{{ asset('storage/'.$product->images->first()->full) }}"> 
                                        @else
                                        <img class="img-sm float-right" src="{{ asset('frontend/images/noimage.jpg') }}"> 
                                        @endif
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> {{ $product->summary }}</p>
                                        @if( Carbon\Carbon::now()->subMonth()->lt($product->created_at) )
                                            <span class="badge badge-danger"> NEW </span>
                                        @endif
                                        @if( $sale && $product->sale_price > 0)
                                            <span class="badge badge-danger">SALE {{ sale_percent($product->price,$product->sale_price)}} OFF</span>
                                        @endif
                                    </div>
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </section>
        @endif
        @endforeach
        <!-- =============== SECTION 1 END =============== -->


        <!-- =============== SECTION REQUEST =============== -->

        <section class="padding-bottom">

            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">Request for Quotation</h4>
            </header>

            <div class="row">
                <div class="col-md-8">
                    <div class="card-banner banner-quote overlay-gradient" style="background-image: url('https://bootstrap-ecommerce.com/templates/alistyle-html/images/banners/banner9.jpg');">
                        <div class="card-img-overlay white">
                            <h3 class="card-title">An easy way to send request to suppliers</h3>
                            <p class="card-text" style="max-width: 400px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt.</p>
                            <a href="" class="btn btn-primary rounded-pill">Learn more</a>
                        </div>
                    </div>
                </div> <!-- col // -->
                <div class="col-md-4">

                    <div class="card card-body">
                        <h4 class="title py-3">One Request, Multiple Quotes</h4>
                        <form>
                            <div class="form-group">
                                <input class="form-control" name="" placeholder="What are you looking for?" type="text">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Quantity" name="" type="text">
                                    
                                    <select class="custom-select form-control">
                                        <option>Pieces</option>
                                        <option>Litres</option>
                                        <option>Tons</option>
                                        <option>Gramms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-muted">
                                <p>Select template type:</p>
                                <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="option1">
                                <span class="form-check-label">Request price</span>
                                </label>
                                <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="option2">
                                <dspaniv class="form-check-label">Request a sample</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning">Request for quote</button>
                            </div>
                        </form>
                    </div>

                </div> <!-- col // -->
            </div> <!-- row // -->
        </section>

        <!-- =============== SECTION REQUEST .//END =============== -->


        <!-- =============== SECTION ITEMS =============== -->
        <section  class="padding-bottom-sm">

            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">Recommended items</h4>
            </header>

            <div class="row row-sm">
                @foreach($recommend_products as $r_product)
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="card card-sm card-product-grid">
                        @if ($r_product->images->count() > 0)
                        <a href="{{ route('product.show', $r_product->slug) }}" class="img-wrap"> <img src="{{ asset('storage/'.$r_product->images->first()->full) }}"> </a>
                        @else
                        <a href="{{ route('product.show', $r_product->slug) }}" class="img-wrap"> <img src="{{ asset('frontend/images/noimage.jpg') }}">  </a>
                        @endif
                        
                        @if( $sale && $r_product->sale_price > 0)
                        <div class="badge-saleoff-overlay">
                            <!-- Change Badge Position, Color, Text here-->
                            <span class="top-right badge-saleoff orange">Sale {{ sale_percent($r_product->price,$r_product->sale_price)}} OFF</span>
                        </div>
                        @endif
                        
                        <figcaption class="info-wrap">
                            <a href="{{ route('product.show', $r_product->slug) }}" class="title">{{ $r_product->name }}</a>
                            @if ($sale && $r_product->sale_price > 0)
                            <div class="price mt-1">{{ config('settings.currency_symbol').number_format($r_product->sale_price) }}</div> <!-- price-wrap.// -->
                                
                            <del class="price-old"> {{ config('settings.currency_symbol').number_format($r_product->price) }}</del>
                                
                            @else
                                
                            <div class="price mt-1">{{ config('settings.currency_symbol').number_format($r_product->price) }}</div> <!-- price-wrap.// -->
                                
                            @endif 
                            
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->
        </section>
        <!-- =============== SECTION ITEMS .//END =============== -->


        <!-- =============== SECTION SERVICES =============== -->
        <section  class="padding-bottom">

            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">Brands</h4>
            </header>

            <div class="row">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        @foreach($brands as $brand)
                        @if($loop->first)
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <img src="{{ asset('storage/'.$brand->logo) }}" class="img-fluid mx-auto d-block" alt="{{ $brand->name }}">
                        </div>
                        @else
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="{{ asset('storage/'.$brand->logo) }}" class="img-fluid mx-auto d-block" alt="{{ $brand->name }}">
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> <!-- row.// -->

        </section>
        <!-- =============== SECTION SERVICES .//END =============== -->

        

        <article class="my-4">
            <img src="https://bootstrap-ecommerce.com/templates/alistyle-html/images/banners/ad-sm.png" class="w-100">
        </article>
    </div>  
        <!-- container end.// -->
@stop
@push('scripts')

<script type="text/javascript" src="{{ asset('frontend/plugins/slickslider/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/countdown/jquery.countdown.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
            Carousel
        */
        $('#carousel-example').on('slide.bs.carousel', function (e) {

        /*
            CC 2.0 License Iatek LLC 2018
            Attribution required
        */
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 5;
        var totalItems = $('#carousel-example .carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
        });

        $('.top-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        infinite: true,
        arrows: false,
        touchMove: true,
        });

        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            //var totalHours = event.offset.totalDays * 24 + event.offset.hours;
            $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(''
                + '<div> <span class="num">'+ event.offset.totalDays +'</span> <small>Days</small></div> '
                + '<div> <span class="num">%H</span> <small>Hours</small></div> '
                + '<div> <span class="num">%M</span> <small>Min</small></div> '
                + '<div> <span class="num">%S</span> <small>Sec</small></div> '));
            });
        });
    });
</script>
@endpush