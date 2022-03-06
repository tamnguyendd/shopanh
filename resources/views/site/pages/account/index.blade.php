@extends('site.app')
@section('title', $profile->last_name."'s Profile")
@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-gray">
<div class="container">
	<h2 class="title-page">My account: {{ $profile->fullname }}</h2>
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

            <div class="card">
                <div class="card-body">
                    <form class="row" id="form-profile" action="{{ route('account.profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-9">
                            
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ $profile->last_name }}">
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ $profile->first_name }}">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row.// -->
                            <div class="form-group">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" type="radio" name="gender" value="0" {{ ($profile->gender == 0 ? 'checked' : '') }}>
                                    <span class="custom-control-label"> Male </span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" type="radio" name="gender" value="1" {{ ($profile->gender == 1 ? 'checked' : '') }}>
                                    <span class="custom-control-label"> Female </span>
                                </label>
                            </div> <!-- form-group end.// -->
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ $profile->email }}" readonly>
                                    
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Avatar</label>
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id="avatar" value="{{ old('avatar', $profile->avatar) }}">
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row.// -->

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ $profile->phone }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                                <div class="form-group col-md-6">
                                    <label>Zip</label>
                                    <input type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" id="zip" value="{{ $profile->zip }}">
                                    @error('zip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row.// -->

                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Address</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{ $profile->address }}">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row.// -->
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{ $profile->city }}">
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
                                        @foreach($countries as $key => $value)
                                            @if ($key == $profile->country)
                                                <option value="{{ $key }}" selected>{{ $value }}</option>
                                            @else
                                                <option value="{{ $key }}" >{{ $value }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row.// -->


                            <button class="btn btn-primary" type="submit" >Save</button>

                            

                        </div> <!-- col.// -->
                        <div class="col-md">
                            @if ($profile->avatar != '')
                                <img src="{{ asset('storage/'.$profile->avatar) }}" class="img-md rounded-circle border">
                            @else
                                @if($profile->gender == 0)
                                    <img class="img-md rounded-circle border" src="{{ asset('frontend/images/avatars/iavatar_male.jpg') }}" style="height: 150px; width: 150px;">
                                @else
                                    <img class="img-md rounded-circle border" src="{{ asset('frontend/images/avatars/iavatar_female.jpg') }}" style="height: 150px; width: 150px;">
                                @endif
                            @endif

                        </div>  <!-- col.// -->
                    </form>

                </div><!-- card-body.// -->
            </div> <!-- card .// -->

	    </main> <!-- col.// -->
            
        
    </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection