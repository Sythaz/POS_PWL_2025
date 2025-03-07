<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction POS</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            padding: 20px;
            width: auto;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transaction POS</h1>
        <table>
            <tr>
                <th>ID NIM</th>
                <th>Nama</th>
                <th>Total Pembayaran</th>
                <th>Tanggal</th>
            </tr>
            <tr>
                <td>2341720102</td>
                <td>Muhammad Syafiq Aldiansyah</td>
                <td>Rp 20.000</td>
                <td>{{ date('d-m-Y', strtotime('-2 days')) }}</td>
            </tr>
            <tr>
                <td>0101010101</td>
                <td>Anonim</td>
                <td>Rp 100.000</td>
                <td>07-03-2025</td>
            </tr>
        </table>
    </div>
</body>
</html>
