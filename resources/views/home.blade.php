<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .navbar {
            background: #007BFF;
            color: white;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px ;
            display: inline-block;
        }
        .navbar a:hover {
            background: blue;
            border-radius: 10px;
        }
        .selamatdatang {
            margin-top: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="{{ route('user.showUser', ['id' => 2341720102, 'name' => 'Muhammad Syafiq Aldiansyah']) }}">Profile Page</a>
        <a href="{{ route('category.showCategory') }}">Category Page</a>
        <a href="{{ route('transaction.showTransaction') }}">History Transaction Page</a>
    </div>

    <div class="selamatdatang">
        <h1>Welcome to Home Page</h1>
    </div>

</body>
</html>
