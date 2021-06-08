@extends('layouts.app')

@section('contents')


  <header class="bg-grey">
        <div class="page-header">
           <div class="page-title">
               Register
           </div> 
           <div>
                <ul id="nm-shop-categories" class="nm-shop-categories">
                    <li class="current-cat">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="cat-item-24">
                        <span class="nm-shop-categories-divider">⁄</span>
                        <a href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                          <p class="auth-title">
                            Register From Here
                        </p>

                        <div class="form-row form-row-wide">
                            <label for="name">{{ __('Name') }}</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-row form-row-wide">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-row form-row-wide">
                            <label for="password" >{{ __('Password') }}</label>

                        
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                        </div>

                        <div class="form-row form-row-wide">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                      
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                         
                        </div>

                        <div class="form-row form-row-wide">
                            
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                         
                        </div>

                         <div class="nm-login-form-divider"><span>Or</span></div>

                           <a href="{{ route('login') }}" class="woocommerce-Button button btn btn-block mb-5">
                                    {{ __('Login') }}
                            </a>
                    </form>
               
    </div>
</div>
@endsection
