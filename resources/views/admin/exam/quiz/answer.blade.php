<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    {{-- @php
    $mark = 0;
@endphp --}}

@foreach ($questions as $question)
    <h1 style="text-align: center">Question:{{ $question->Question }}<br></h1>
    <h4 style="padding-left:620px">option_1:{{ $question->option_1 }}<br></h4>
    <h4 style="padding-left:620px">option_2:{{ $question->option_2 }}<br></h4>
    <h4 style="padding-left:620px">option_3:{{ $question->option_3 }}<br></h4>
    <h4 style="padding-left:620px">option_4:{{ $question->option_4 }}<br></h4>
    <h4 style="padding-left:620px">Answer:{{ $question->Answer }}<br></h4>
    <h2 style="padding-left:620px">submitted_answer:{{ $question->submissions->submitted_answer }} <br></h2>
    {{-- <h2 @if($question->submissions->submitted_answer == $question->Answer) class="right_answer" @endif>
        @if($question->submissions->submitted_answer == $question->Answer)
            Right Answer
            @php
                $mark += 1; // Increment the mark if the answer is correct
            @endphp
        @else
            Wrong Answer
        @endif
    </h2> --}}
    {{-- @dd($question->submissions->right_answer) --}}
@endforeach

<h2 style="padding-left:620px">Total Mark: {{ $question->submissions->where('user_id', Auth::user()->id)->count('right_answer') }}</h2>

    {{-- @foreach ($question->submissions as $item)
            {{$question->where('Answer',$question->Answer)->count()}} 
                {{ $item->where('Answer',$question->submitted_answer)->count()}} 
    @endforeach --}}





</body>

</html>
