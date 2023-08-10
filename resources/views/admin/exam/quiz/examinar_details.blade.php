<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
  
     Quiz name:{{ $quiz->Quiz }}<br>
    @foreach ($questions as $question)
    {{-- @if($question->user_id == Session::get('user_id')) --}}
        Question: {{ $question->Question }}<br>
        Option 1: {{ $question->option_1 }}<br>
        Option 2: {{ $question->option_2 }}<br>
        Option 3: {{ $question->option_3 }}<br>
        Option 4: {{ $question->option_4 }}<br>
        Right Answer: {{ $question->Answer }}<br>
        {{-- @endif --}}
    @endforeach

   

</body>

</html>
