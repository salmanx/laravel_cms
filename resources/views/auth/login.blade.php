@extends('layouts.backend.auth')

@section('content')
<div class="login-box" style="margin-bottom: 30px;">
    <form class="login-form" role="form" method="POST" action="{{ url('/sitecontrol/login') }}">

        {{ csrf_field() }}

        <h5 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h5>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">E-Mail Address</label>

            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Password</label>

            <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox" name="remember"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
<!--               <p class="semibold-text mb-0"><a id="toFlip" href="{{ url('/password/reset') }}">Forgot Password ?</a></p>
 -->            </div>
        </div>

       <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block">SIGN IN <i class="fa fa-sign-in fa-lg"></i></button>
        </div>  

    </form>
</div>

@endsection






