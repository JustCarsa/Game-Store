<!DOCTYPE html>
<html lang="id">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 10px;
            font-size: 16px;
            line-height: 1.5;
        }

        .details {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }

        .details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .details ul li {
            font-size: 16px;
            padding: 5px 0;
            border-bottom: 1px solid #dddddd;
        }

        .details ul li:last-child {
            border-bottom: none;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #888888;
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>Terima Kasih atas Pembelian Anda!</h1>
        </div>
        <div class="content">
            <p>Halo, {{ $data['email'] }}</p>
            <p>Berikut adalah detail pembelian Anda:</p>
            <div class="details">
                <ul>
                    <li><strong>Nama Game:</strong> {{ $data['game'] }}</li>
                    <li><strong>Kode Game:</strong> {{ $data['code'] }}</li>
                    <li><strong>Harga:</strong> Rp{{ number_format($data['price'], 0, ',', '.') }}</li>
                    <li><strong>Jumlah:</strong> {{ $data['qty'] }}</li>
                    <li><strong>Total:</strong> Rp{{ number_format($data['total'], 0, ',', '.') }}</li>
                    <li><strong>Kode Redeem:</strong> {{ $data['redeem_code'] }}</li>
                </ul>
            </div>
            <p>Silakan gunakan kode redeem di atas untuk mengklaim pembelian Anda.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 TokoSebelah. Semua hak dilindungi.</p>
        </div>
    </div>
</body>

</html>
