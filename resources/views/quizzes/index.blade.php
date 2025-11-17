@extends('layout')

@section('content')
<h1>Lista Quizów</h1>

<ul>
    @foreach($quizzes as $quiz)
        <li>
            <a href="{{ url('/quizzes/'.$quiz->id) }}">{{ $quiz->title }}</a>
        </li>
    @endforeach
</ul>
@endsection
