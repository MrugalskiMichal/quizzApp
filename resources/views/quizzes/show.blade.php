@extends('layout')

@section('content')
<h1>{{ $quiz->title }}</h1>

<form method="POST" action="{{ url('/quizzes/'.$quiz->id.'/submit') }}">
    @csrf

    @foreach($quiz->questions as $question)
        <div class="question">
            <p class="question-text">{{ $loop->iteration }}. {{ $question->question_text }}</p>

            @php
                $options = json_decode($question->options) ?? [];
                shuffle($options);
            @endphp

            <div class="options">
                @foreach($options as $option)
                    <label class="option-label">
                        <input type="radio" name="question_{{ $question->id }}" value="{{ $option }}">
                        {{ $option }}
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach

    <button type="submit" class="btn-submit">Submit Answers</button>
</form>

<a href="{{ url('/quizzes') }}" class="back-link">Back to Quiz List</a>
@endsection
