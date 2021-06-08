@extends('multiauth::layouts.app')

@section('class', 'd-flex align-items-center bg-auth border-top border-top-2 border-primary')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

              <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                Sign in
            </h1>

           <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                Welcome to the {{ ucfirst(config('multiauth.prefix')) }} Dashboard
            </p>

            <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
                @csrf

                <div class="form-group">

                    <label for="email">{{ __('E-Mail Address') }}</label>

                        <input id="email"
                               type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email"
                               value="{{ old('email') }}"
                               required autofocus
                               placeholder="name@address.com">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                </div>

                <div class="form-group">

                    <label for="password">{{ __('Password') }}</label>

                    <input id="password"
                           type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password"
                           required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                        <label class="form-check-label " for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                </div>


                        <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                            Sign In
                        </button>

                        <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>



            </form>
        </div>
    </div>
</div>
@endsection
