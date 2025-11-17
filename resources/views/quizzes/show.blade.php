@extends('layout')

@section('content')
<h1>{{ $quiz->title }}</h1>

<ul>
    @foreach($quiz->questions as $question)
        <li>{{ $question->question_text }} — <strong>{{ $question->answer }}</strong></li>
    @endforeach
</ul>

<a href="{{ url('/quizzes') }}">Powrót do listy quizów</a>
@endsection
