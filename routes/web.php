<?php

use Illuminate\Support\Facades\Route;

Route::get('/quizzes', function () {
    // Możemy od razu przekazać przykładową tablicę quizów
    $quizzes = [
        'Quiz 1: PHP Basics',
        'Quiz 2: Laravel Routing',
        'Quiz 3: HTML & CSS'
    ];
    return view('quizzes', ['quizzes' => $quizzes]);
});
