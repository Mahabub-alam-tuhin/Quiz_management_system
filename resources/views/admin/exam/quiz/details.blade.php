<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <button class="btn btn-success"><a href="{{ route ('admin.exam.quiz.view')}}">Back</a> </button>                               
    <h4>Teacher name:{{ $quiz->name }}<br></h4>
    <h4>Quiz name:{{ $quiz->Quiz }}<br></h4>
    @foreach ($questions as $question)
        Question: {{ $question->Question }}<br>
        Option 1: {{ $question->option_1 }}<br>
        Option 2: {{ $question->option_2 }}<br>
        Option 3: {{ $question->option_3 }}<br>
        Option 4: {{ $question->option_4 }}<br>
        Right Answer: {{ $question->Answer }}<br>    
    @endforeach

</body>

</html>
