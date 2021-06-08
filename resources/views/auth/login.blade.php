@extends('layouts.app')

@section('contents')
<div class="container-fluid">



     <header class="bg-grey">
        <div class="page-header">
           <div class="page-title">
               Login
           </div> 
           <div>
                <ul id="nm-shop-categories" class="nm-shop-categories">
                    <li class="current-cat">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="cat-item-24">
                        <span class="nm-shop-categories-divider">⁄</span>
                        <a href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>



    <div class="row justify-content-center">
        <div class="col-md-8">
            
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <p class="auth-title">
                            Login From Here
                        </p>
                

                        <div class="form-row form-row-wide">
                            <label for="email">{{ __('E-Mail Address') }} <span class="required">*</span></label>

                         
                                <input id="email" type="email" class="woocommerce-Input woocommerce-Input--text input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-row form-row-wide">
                            <label for="password">{{ __('Password') }}</label>

                         
                                <input id="password" type="password" class="woocommerce-Input woocommerce-Input--text input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>




                        <div class="form-actions">
                            <button type="submit" class="woocommerce-Button button btn btn-block">
                                    {{ __('Login') }}
                            </button>


                            <div class="nm-login-form-divider"><span>Or</span></div>

                            <a href="{{ route('register') }}" class="woocommerce-Button buton btn btn-primary btn-block">
                                    {{ __('Register') }}
                            </a>

                            <div class="col-md-8 offset-md-4">
                                

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
              
    </div>
</div>
@endsection
