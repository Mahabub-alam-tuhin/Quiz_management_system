@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <section class="answer" style="margin-top:80px;background-color:rgba(22,34,57,0.95); padding-left:60px;">
        @foreach ($questions as $question)
            <h3 style="color:aliceblue; padding-top: 15px;">{{ $question->Question }}<br></h3>
            
            @if ($question->multiple == '1')
                @php
                    // $decoded = json_decode($question->Answer);
                    $submittedAnswers = json_decode($question->submissions->submitted_answer);
                @endphp

                
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ in_array($question->option_1, $submittedAnswers) ? 'checked' : '' }}>
                    {{ $question->option_1 }}<br>
                </h6>
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ in_array($question->option_2, $submittedAnswers) ? 'checked' : '' }}>
                    {{ $question->option_2 }}<br>
                </h6>
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ in_array($question->option_3, $submittedAnswers) ? 'checked' : '' }}>
                    {{ $question->option_3 }}<br>
                </h6>
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ in_array($question->option_4, $submittedAnswers) ? 'checked' : '' }}>
                    {{ $question->option_4 }}<br>
                </h6>
                
            @else
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ $question->option_1 === $question->submissions->submitted_answer ? 'checked' : '' }}>
                    {{ $question->option_1 }}<br>
                </h6>
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ $question->option_2 === $question->submissions->submitted_answer ? 'checked' : '' }}>
                    {{ $question->option_2 }}<br>
                </h6>
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ $question->option_3 === $question->submissions->submitted_answer ? 'checked' : '' }}>
                    {{ $question->option_3 }}<br>
                </h6>
                <h6 style="color:aliceblue;">
                    <input type="checkbox" {{ $question->option_4 === $question->submissions->submitted_answer ? 'checked' : '' }}>
                    {{ $question->option_4 }}<br>
                </h6>
            @endif

            <h6 style="color:aliceblue;">Answer:{{ $question->Answer }}<br></h6>
            <h5 style="color:#f5a425;">
                submitted_answer:{{ $question->submissions ? $question->submissions->submitted_answer : '' }}
                <br>
            </h5>
            @if ($question->submissions->right_answer == 1)
                <p style="color: green;">Right Answer</p>
            @else
                <p style="color: red;">Wrong Answer</p>
            @endif
        @endforeach
        <h2 style="color:aliceblue; margin: 0px">Total Mark:
            {{ $question->submissions ? $question->submissions->where('user_id', Auth::user()->id)->count('right_answer') : '' }}
        </h2>
    </section>
@endsection
