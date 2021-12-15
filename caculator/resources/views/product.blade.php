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
<form action="product" method="post">
    @csrf
    <input type="text" name="ProductDescription" placeholder="Mô tả sản phẩm">
    <input type="text" name="Price" placeholder="Giá sản phẩm ">
    <input type="text" name="Percent" placeholder="Chiết khấu">
    <button type="submit">Calculate Discount</button>
</form>
</body>
</html>
