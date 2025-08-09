<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> - R$ {{ number_format($product->price, 2, ',', '.') }}<br>
                {{ $product->description }}
            </li>
        @endforeach
    </ul>
</body>
</html>
