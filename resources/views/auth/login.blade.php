@extends('frontEnd.master')

@section('content')
<section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div class="continer centerIt">
                    <div>
                        <h4>please <em>login</em> your Account</h4>
                        <div class="counter">

                            <div class="days">
                                <div class="value">146</div>
                                <span>Days</span>
                            </div>

                            <div class="hours">
                                <div class="value">8</div>
                                <span>Hours</span>
                            </div>

                            <div class="minutes">
                                <div class="value">39</div>
                                <span>Minutes</span>
                            </div>

                            <div class="seconds">
                                <div class="value">27</div>
                                <span>Seconds</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right-content">
                    <div class="top-content">
                        <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="Enter your Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Enter your password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}" required autocomplete="password" autofocus>
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="row">
                                    <div class="tttt">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
