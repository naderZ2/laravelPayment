<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>phone 1 </h1>
    <h3>price: $100 </h3>
    <form action="{{route('paypal')}}" method="post">
        @csrf
<input type="hidden" value="5" name="price">
<input type="hidden" value="phone_name" name="product_name">
<input type="hidden" value="1" name="quantity">
<button type="submit">pay with paypal</button>
    </form>
</body>
</html>
