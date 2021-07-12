<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>First Steps with Laravel</title>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            height: 100%;
        }
        .title {
            font-size: 75px; 
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="flex-center">
        <div class="title">
            <h1>Hello World!</h1>
        <h3> Hello {{$name}}</h3>
        </div>
    </div>
    
</body>
</html>