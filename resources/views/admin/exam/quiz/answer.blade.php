@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
<section class="answer" style="margin-top:80px;background-color:rgba(22,34,57,0.95); padding-left:60px;">
@foreach ($questions as $question)
    <h3 style="color:aliceblue; padding-top: 15px;">{{ $question->Question }}<br></h3>
    <h6 style="color:aliceblue;"><input type="checkbox">{{ $question->option_1 }}<br></h6>
    <h6 style="color:aliceblue;"><input type="checkbox">{{ $question->option_2 }}<br></h6>
    <h6 style="color:aliceblue;"><input type="checkbox">{{ $question->option_3 }}<br></h6>
    <h6 style="color:aliceblue;"><input type="checkbox">{{ $question->option_4 }}<br></h6>
    <h6 style="color:aliceblue;">Answer:{{ $question->Answer }}<br></h6>
    <h5 style="color:#f5a425;">submitted_answer:{{ $question->submissions->submitted_answer }} <br></h5>

@endforeach
<h2 style="color:aliceblue; margin: 0px">Total Mark: {{ $question->submissions->where('user_id', Auth::user()->id)->count('right_answer') }}</h2>
</section>
</body>

</html>
@endsection