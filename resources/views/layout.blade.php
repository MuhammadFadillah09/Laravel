<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pemerintahan Kota Palangkaraya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #0f3057;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        main {
            padding: 20px;
            text-align: center; 
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            display: inline-block;
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
        }

        h1, h2 {
            color: #0f3057;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #0f3057;
            color: #fff;
        }

        button {
            background-color: #0f3057;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0c2346;
        }

        .data-count {
            margin-top: 10px;
            font-size: 18px;
        }

        nav {
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #0f3057;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard - Pemerintahan Kota Palangkaraya</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
