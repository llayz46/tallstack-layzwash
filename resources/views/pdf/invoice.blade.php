<html>
<head>
    <title>Invoice for order #{{ $order->id }}</title>
</head>
<body>
    <h1>Invoice</h1>
    <p>Invoice for order #{{ $order->id }}</p>
    <p>Order placed on <time datetime="{{ $order->created_at->format('Y-m-d') }}">{{ $order->created_at->format('D m, Y') }}</time></p>
    <p>Total amount: {{ $order->amount_total }}</p>
    <h2>Items</h2>
    <ul>
        @foreach($order->items as $item)
            <li>{{ $item->name }} - {{ $item->price }}</li>
        @endforeach
    </ul>
</body>
</html>
