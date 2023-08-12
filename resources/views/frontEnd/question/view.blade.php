@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<form style="margin:0px;" action="{{route('frontEnd.question.store')}}" method="post">
    @csrf

<section style="background-color:#172238; padding-left:60px; margin-top: 80px;">
    @foreach ($questions as $question)
  
    <ul><h3 style="color:aliceblue; padding-top:15px;"> {{$question->Question}}</h3> </ul>  
    <input type="hidden" name="quiz_id" value="{{$question->quiz_id}}">
    <input type="hidden" name="ques_id[]" value="{{$question->id}}">

    <ul><li><h6 style="color:aliceblue;"><input type="checkbox" name="submitted_answer[]" value="{{$question->option_1}}">{{$question->option_1}}</h6></li></ul> 
    <ul><li><h6 style="color:aliceblue;"><input type="checkbox" name="submitted_answer[]" value="{{$question->option_2}}">{{$question->option_2}}</h6></li></ul> 
    <ul><li><h6 style="color:aliceblue;"><input type="checkbox" name="submitted_answer[]" value="{{$question->option_3}}">{{$question->option_3}}</h6></li></ul> 
    <ul><li><h6 style="color:aliceblue;"><input type="checkbox" name="submitted_answer[]" value="{{$question->option_4}}">{{$question->option_4}}</h6></li></ul> 
    
    
    @endforeach
    
    <ul>  
        {{-- <button type="submit" href="{{ route('admin.exam.quiz.answer',$question->quiz_id) }}" class="btn btn-primary">Submit</button> --}}
        <button type="submit" class="btn btn-primary" style="margin-bottom:20px;" >Submit</button>
    </ul>
</section>
</form>
</body>
</html>