<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .invoice-details {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .item-name {
            flex: 1;
        }

        .total {
            font-weight: bold;
            margin-top: 10px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="header">
            <h1>Invoice</h1>
        </div>
        <div class="invoice-details">
            <div class="item">
                <span class="item-name">Item 1</span>
                <span class="item-amount">$100.00</span>
            </div>
            <div class="item">
                <span class="item-name">Item 2</span>
                <span class="item-amount">$200.00</span>
            </div>
            <div class="item">
                <span class="item-name">Item 3</span>
                <span class="item-amount">$50.00</span>
            </div>
            <div class="total">
                Total: $350.00
            </div>
        </div>
    </div>
</body>
</html>
