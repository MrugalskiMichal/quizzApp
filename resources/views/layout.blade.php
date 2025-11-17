<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 800px;
    margin: 30px auto;
    background-color: #fff;
    padding: 20px 30px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    border-radius: 12px;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
}

/* Kontener listy quizów */
.quiz-list-container {
    display: flex;
    flex-direction: column;
    align-items: center; /* wyśrodkowanie poziome */
}

/* Lista quizów */
ul.quiz-list {
    list-style: none;
    padding: 0;
    width: 100%;
    max-width: 400px; /* maksymalna szerokość listy */
}

/* Pojedynczy element listy */
ul.quiz-list li {
    margin-bottom: 15px;
}

/* Link w elemencie listy */
ul.quiz-list li a {
    display: block;
    padding: 12px 18px;
    background-color: #eef0ff;
    border-radius: 8px;
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
    text-align: center; /* wyśrodkowanie tekstu */
    transition: background-color 0.2s, transform 0.2s;
}

ul.quiz-list li a:hover {
    background-color: #d7d9ff;
    transform: translateY(-2px);
}

/* Quiz page */
.question {
    background-color: #f9f9ff;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 1px 6px rgba(0,0,0,0.05);
}

.question-text {
    font-weight: bold;
    color: #007BFF;
    margin-bottom: 15px;
}

.options {
    display: flex;
    flex-direction: column;
    gap: 10px; /* spacing between options */
}

.option-label {
    background-color: #eef0ff;
    padding: 10px 15px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.option-label:hover {
    background-color: #d7d9ff;
}

input[type="radio"] {
    margin-right: 10px;
}

.btn-submit {
    display: block;
    margin: 20px auto 10px auto;
    padding: 12px 25px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-submit:hover {
    background-color: #0056b3;
}

.back-link {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
}

.back-link:hover {
    color: #0056b3;
}
</style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
