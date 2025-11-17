<!DOCTYPE html>
<html>
<head>
    <title>Lista Quizów</title>
</head>
<body>
    <h1>Lista Quizów</h1>
    <ul>
        @foreach($quizzes as $quiz)
            <li>{{ $quiz }}</li>
        @endforeach
    </ul>
</body>
</html>
