@extends('layouts.app')

@section('content')
<div class="container">
<center><h1 class="form-heading">Login To Your Maxcoins Account</h1></center>

<div class='row'>
<div class='col-md-3'></div>
<div class='col-md-6'>
<div class="login-form">
<div class="main-div">
    
   
	<form  id="Login" method="POST" action="{{ route('login') }}">
	
                        @csrf
						
						<div class="form-group">
Don't have an account? 

            <a  href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>

        </div>

        <div class="form-group">


            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
			@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

        </div>

        <div class="form-group">

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

        </div>
        <div class="forgot">
        
		@if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
        @endif
</div>
        <button type="submit"style="background-color:#E0E0E0; border:0px;color:black;" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

    </form>
    </div>

</div>

</div>
<div class='col-md-3'></div>

</div>
</div>

@endsection
