@component('mail::message')
Hi {{ $order->user->getFullName() }},

Your order #{{ $order->id }} has been confirmed.

Here are the details of your order:

<br>

<table>
    <thead>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Taxes</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
            <tr>
                <td>{{ $item->name }} <br> {{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->amount_tax }}</td>
                <td>{{ $item->amount_total }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
<tr>
    <td colspan="3"></td>
    <td>Taxes</td>
    <td>{{ $order->amount_tax }}</td>
</tr>

<tr>
    <td colspan="3"></td>
    <td>Subtotal</td>
    <td>{{ $order->amount_subtotal }}</td>
</tr>

<tr>
    <td colspan="3"></td>
    <td>Total</td>
    <td>{{ $order->amount_total }}</td>
</tr>
    </tfoot>
</table>
@component('mail::button', ['url' => ''])
View Order
@endcomponent
@endcomponent
