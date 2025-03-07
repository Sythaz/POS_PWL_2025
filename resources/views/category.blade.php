<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Page</title>
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 16px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            font-family: Arial;
            text-decoration: none;
            color: white;
            background: #007BFF;
            padding: 10px 15px;
            border-radius: 10px;
            display: block;
            transition: 0.3s; // Lama transisi utk hover
        }
        a:hover {
            background: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Category Page</h1>
        <p>Pilih kategori yang anda inginkan:</p>
        <ul>
            <li><a href="{{ route('category.foodBeverage') }}">Food & Beverage</a></li>
            <li><a href="{{ route('category.beautyHealth') }}">Beauty & Health</a></li>
            <li><a href="{{ route('category.homeCare') }}">Home Care</a></li>
            <li><a href="{{ route('category.babyKid') }}">Baby & Kid</a></li>
        </ul>
    </div>
</body>
</html>
