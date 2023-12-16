<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products.index</title>
</head>
<body>
<h1>products.index</h1>
@foreach ( $products as $product)
<h2>{{ $product->name }}</h2>
@endforeach

</body>
</html>
