<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order, {{ $order->user->name }}</h1>
    <p>Your order ID is #{{ $order->order_number }}</p>
    <p>Order Date: {{ $order->created_at->format('Y-m-d H:i') }}</p>

    <h3>Items:</h3>
    <ul>
        @foreach ($order->items as $item)
            <li>{{ $item->product->name }} — Qty: {{ $item->quantity }} — Price: ₹{{ $item->price }}</li>
        @endforeach
    </ul>

    <p>Total Amount: ₹{{ $order->total }}</p>

    <p>We will notify you when your order is shipped.</p>

    <hr>
    <p>Thanks, <br> Your Company Name</p>
</body>
</html>
