@extends('layout')

@section('content')
<h1>Lista Quizów</h1>

<div class="quiz-list-container">
    <ul class="quiz-list">
        @foreach($quizzes as $quiz)
            <li>
                <a href="{{ url('/quizzes/'.$quiz->id) }}">{{ $quiz->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
