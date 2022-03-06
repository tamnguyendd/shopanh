<header class="section-header">
<section class="header-main border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-3 col-lg-3 col-md-12">
				<a href="{{ url('/') }}" class="brand-wrap">
					<img class="logo" src="{{ asset('frontend/images/logo1.png') }}">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-xl-6 col-lg-5 col-md-7">
				<form action="{{ route('search.result') }}" method="GET" class="search-header">
					<div class="input-group w-100">
						<select class="custom-select border-right"  name="category_name">
								<option value="all">All categories</option>
								@foreach($categories as $category)
								<option value="{{ $category->slug }}">{{ $category->name }}</option>
								@endforeach
						</select>
					    <input type="text" class="form-control" placeholder="Search" name="search">
					    
					    <div class="input-group-append">

							<button class="btn btn-primary" type="submit">
								<i class="fa fa-search"></i> Search
							</button>
<!--
							<a class="btn btn-primary" href="{{ url('/search/1') }}">
								<i class="fa fa-search"></i> Search
							</a> -->
					    </div>
				    </div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="widgets-wrap float-md-right">
                    
					<div class="widget-header mr-3">
                        @guest
                            <ul class="navbar-nav ml-auto widget-view no-top">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <div class="icon-area">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <small class="text"> Guest </small>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                                        <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-edit"></i> Register</a>
                                    </div>
                                </li>
                            </ul>
                        @else
                            <ul class="navbar-nav ml-auto widget-view no-top">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <div class="icon-area">
                                            <i class="fa fa-user-circle"></i>
                                        </div>
							            <small class="text"> My profile </small>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('account.profile') }}"><i class="fas fa-address-card"></i> Edit Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> 
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endguest
					</div>
					
					<div class="widget-header mr-3">
						<a href="{{ route('wishlist.index') }}" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-heart"></i>
								@if( $wishListCount > 0 )
								<span class="notify">{{ $wishListCount }}</span>
								@endif
							</div>
							<small class="text"> Wishlist </small>
						</a>
					</div>

					<div class="widget-header">
						<a href="{{ route('checkout.cart') }}" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-shopping-cart"></i>
								@if ( $cartCount > 0 )
								<span class="notify">{{ $cartCount }}</span>
								@endif
							</div>
							<small class="text"> Cart </small>
						</a>
					</div>

				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->


    @include('site.partials.nav')
</header>