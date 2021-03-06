<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body
<div class="container">
    <h1>Working...</h1>
    <table>
        <tr>
            <th>Order ID | </th>
            <th>Food | </th>
            <th>Meal | </th>
            <th>Condiments | </th>
            <th>Date/Time | </th>
        </tr>
        <?php foreach (($orders?:[]) as $order): ?>
                <tr>
                    <td> <?= ($order['order_id']) ?></td>
                    <td> <?= ($order['food']) ?></td>
                    <td> <?= ($order['meal']) ?></td>
                    <td> <?= ($order['condiments']) ?></td>
                    <td> <?= (date('n-j-Y g:i a', strtotime($order['order_date']))) ?></td>
                </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>