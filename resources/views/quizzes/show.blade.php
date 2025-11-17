@extends('layout')

@section('content')
<h1>{{ $quiz->title }}</h1>

<ul>
    @foreach($quiz->questions as $question)
        <li class="question">
            <span>{{ $question->question_text }}</span>
            <strong>{{ $question->answer }}</strong>
        </li>
    @endforeach
</ul>

<a href="{{ url('/quizzes') }}" class="back-link">Powrót do listy quizów</a>
@endsection
