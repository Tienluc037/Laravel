<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/dictionary" method="post">
    <h2>Nhập từ cần dịch</h2>
    @csrf
    <input type="text" name="name" placeholder="Nhập từ cần dịch">
    <button type="submit">Dịch</button>
</form>
</body>
</html>
