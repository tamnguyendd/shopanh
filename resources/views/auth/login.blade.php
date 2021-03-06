@extends('site.app')
@section('title', 'Login')
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-conten padding-y" style="min-height:84vh">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
        <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
            <div class="card-body">
                <h4 class="card-title mb-4">Sign in</h4>
                <form action="{{ route('login') }}" method="POST" role="form">
                @csrf
                    <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Sign in with Facebook</a>
                    <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Sign in with Google</a>
                    <div class="form-group">
                        <input type="email" placeholder="Username or email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        
                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> <!-- form-group// -->
                    
                    <div class="form-group">
                        <a href="#" class="float-right">Forgot password?</a>
                        <label class="float-left custom-control custom-checkbox" for="remember"> <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <div class="custom-control-label"> {{ __('Remember Me') }} </div> </label>
                    </div> <!-- form-group form-check .// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                    </div> <!-- form-group// -->    
                </form>
            </div> <!-- card-body.// -->
        </div> <!-- card .// -->

        <p class="text-center mt-4">Don't have account? <a href="{{ route('register') }}">Sign up</a></p>
        <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@stop