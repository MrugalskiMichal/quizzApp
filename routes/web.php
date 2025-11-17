<?php

use App\Http\Controllers\QuizController;

Route::get('/quizzes', [QuizController::class, 'index']); // lista quizów
Route::get('/quizzes/{quiz}', [QuizController::class, 'show']); // pojedynczy quiz i jego pytania
