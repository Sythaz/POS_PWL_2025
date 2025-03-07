<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile User Page</title>
    <style>
        body {
            padding-left: 20px;
            padding-right: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h1>User Page</h1>
    <div class="container">
        <div>
            <p><strong>ID NIM:</strong> {{ $id }}</p>
            <p><strong>Nama:</strong> {{ $name }}</p>
        </div>
        <div>
            <img src="https://media.licdn.com/dms/image/v2/D5603AQGVk2YuWFWmmA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1692776958309?e=1746662400&v=beta&t=Q6tobOmcx7a4wQzQXQa1p2pi1JZkHpEUptM1E6WNrGk">
        </div>
    </div>
</body>
</html>
