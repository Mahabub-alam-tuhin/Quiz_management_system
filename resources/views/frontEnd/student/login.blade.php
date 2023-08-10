{{-- @extends('frontEnd.master')

@section('title')
  login
@endsection
<!-- section -->
<section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div class="continer centerIt">
                    <div>
                        <h4>Take <em>any online course</em> and win $326 for your next class</h4>
                        <div class="counter">

                            <div class="days">
                                <div class="value">00</div>
                                <span>Days</span>
                            </div>

                            <div class="hours">
                                <div class="value">00</div>
                                <span>Hours</span>
                            </div>

                            <div class="minutes">
                                <div class="value">00</div>
                                <span>Minutes</span>
                            </div>

                            <div class="seconds">
                                <div class="value">00</div>
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
                    <form action="{{route('frontEnd.student.loginCheck')}}" method="post">
                        <h6 class="text-center text-danger">{{ session('message') }}</h6>
                          @csrf
                          <div class="row">
                           
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="password" type="text" class="form-control" id="phone-number" placeholder="Your password" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Login</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@section('content')
 --}}
