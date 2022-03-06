@extends('site.app')
@section('title', 'Change Password')
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

            <div class="card">
                <div class="card-body">
                    <!-- form change pw -->
                <form id="form-pw" action="{{route('account.changepw.update')}}" method="post" class="row" >
                    <h4>Change Password</h4>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-row mb-3">
                            
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="current_password">Old password</label>
                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required
                                        placeholder="Enter current password" autocomplete="off">
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="new_password ">new password</label>
                                    <input autocomplete="off" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required
                                        placeholder="Enter the new password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="confirm_password">confirm password</label>
                                    <input autocomplete="off" type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required placeholder="Enter same password">
                                    @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-first mt-4 ml-2">
                                <button type="submit" class="btn btn-primary"
                                    id="formSubmit">change password</button>
                            </div>
                        </div>
                    </div>    
                </form>

                </div><!-- card-body.// -->
            </div> <!-- card .// -->

	    </main> <!-- col.// -->
            
        
    </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection