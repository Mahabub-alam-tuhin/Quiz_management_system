@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('frontEndAsset') }}/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Graduate School of Management</h6>
            <h2><em>Your</em> Classroom</h2>
            <div class="main-button">
                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="features-post">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-pencil"></i>All Courses</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post second-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="#section3">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post third-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-book"></i>Real Meeting</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="#section4">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<form action="{{route('frontEnd.question.store')}}" method="post">
    @csrf
<section style="padding-left:60px;">
   
    @foreach ($questions as $question)
  
    <ul><h3> {{$question->Question}}</h3> </ul>  
    <input type="hidden" name="quiz_id" value="{{$question->quiz_id}}">
    <input type="hidden" name="ques_id[]" value="{{$question->id}}">

    <ul><li><h6><input type="checkbox" name="submitted_answer[]" value="{{$question->option_1}}">{{$question->option_1}}</h6></li></ul> 
    <ul><li><h6><input type="checkbox" name="submitted_answer[]" value="{{$question->option_2}}">{{$question->option_2}}</h6></li></ul> 
    <ul><li><h6><input type="checkbox" name="submitted_answer[]" value="{{$question->option_3}}">{{$question->option_3}}</h6></li></ul> 
    <ul><li><h6><input type="checkbox" name="submitted_answer[]" value="{{$question->option_4}}">{{$question->option_4}}</h6></li></ul> 
    
    
    @endforeach
    
    <ul>  
        {{-- <button type="submit" href="{{ route('admin.exam.quiz.answer',$question->quiz_id) }}" class="btn btn-primary">Submit</button> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </ul>

</section>
</form>
</body>
</html>