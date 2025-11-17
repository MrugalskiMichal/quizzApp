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
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 10px 15px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 6px;
            transition: background-color 0.2s;
        }

        li:hover {
            background-color: #e0e0f0;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
        }

        a:hover {
            color: #007BFF;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 15px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .back-link:hover {
            background-color: #0056b3;
        }

        .question {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .question strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
