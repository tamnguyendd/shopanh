@extends('site.app')
@section('title', 'Register')
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

<!-- ============================ COMPONENT REGISTER   ================================= -->
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Sign up</h4></header>
		    <form action="{{ route('register') }}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
				<div class="form-row">
					<div class="col form-group">
						<label>Last name</label>
					  	<input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>First name</label>
					  	<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
					</div> <!-- form-group end.// -->
				</div> <!-- form-row end.// -->
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div> <!-- form-group end.// -->
				<div class="form-group">
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" checked="" type="radio" name="gender" value="0">
					  <span class="custom-control-label"> Male </span>
					</label>
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" type="radio" name="gender" value="1">
					  <span class="custom-control-label"> Female </span>
					</label>
				</div> <!-- form-group end.// -->
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Zip code</label>
                        <input type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" id="zip" value="{{ old('zip') }}" placeholder="Without (-)">
                        @error('zip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-9">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                    </div> <!-- form-group end.// -->
                </div>
				<div class="form-row">
                    <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">
                    </div> <!-- form-group end.// -->
					<div class="form-group col-md-6">
                        <label>Country</label>
                        <select id="country" name="country" class="form-control">
                            @php 
                            $countries = array(
                                "CN" => "China",
                                "JP" => "Japan",
                                "KR" => "Korea, Republic of",
                                "SG" => "Singapore",
                                "TW" => "Taiwan, Province of China",
                                "US" => "United States",
                                "VN" => "Viet Nam");
                            @endphp
                                <option value="" >Choose your country...</option>
                            @foreach($countries as $key => $value)
                                <option value="{{ $key }}" >{{ $value }}</option>
                            @endforeach
                        </select>
					</div> <!-- form-group end.// -->
				</div> <!-- form-row.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Create password</label>
					    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div> <!-- form-group end.// --> 
					<div class="form-group col-md-6">
						<label>Confirm password</label>
					    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div> <!-- form-group end.// -->  
				</div>      
			    <div class="form-group"> 
		            <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input @error('checkbox') is-invalid @enderror" name="checkbox[]" value="1">
                        <div class="custom-control-label"> I am agree with <a href="#">terms and conditions</a>  </div>
                        @if($errors->has('checkbox'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Please indcate that you have read and agree to the Terms and Conditions and Privacy Policy.</strong>
                            </span>
                        @endif
                    </label>
                </div> <!-- form-group end.// -->     
			    <div class="form-group">
			        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
			    </div> <!-- form-group// -->      
			</form>
		</article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="{{ route('login') }}">Log In</a></p>
    <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@stop