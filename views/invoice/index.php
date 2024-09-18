<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .invoice-header h1 {
            font-size: 2.5rem;
            color: #333;
        }

        .company-details, .client-details {
            margin-bottom: 40px;
        }

        .company-details h2, .client-details h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .company-details p, .client-details p {
            font-size: 1rem;
            color: #555;
        }

        .invoice-details {
            margin-bottom: 30px;
        }

        .invoice-details p {
            font-size: 1rem;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .totals {
            text-align: right;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .totals strong {
            font-size: 1.4rem;
        }

        .footer {
            text-align: center;
            font-size: 0.9rem;
            color: #888;
            margin-top: 40px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .invoice-header h1 {
                font-size: 2rem;
            }

            .company-details h2, .client-details h2 {
                font-size: 1.3rem;
            }

            th, td {
                font-size: 0.9rem;
            }

            .totals strong {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

    <div class="invoice-container">

        <!-- Invoice Header -->
        <div class="invoice-header">
            <h1>INVOICE</h1>
        </div>

        <!-- Company Details -->
        <div class="company-details">
            <h2>Company Name</h2>
            <p>123 Business Avenue<br>City, State, 12345<br>Email: info@company.com<br>Phone: (123) 456-7890</p>
        </div>

        <!-- Client Details -->
        <div class="client-details">
            <h2>Client Name</h2>
            <p>456 Client Street<br>Another City, State, 67890<br>Email: client@email.com<br>Phone: (987) 654-3210</p>
        </div>

        <!-- Invoice Details -->
        <div class="invoice-details">
            <p><strong>Invoice #: </strong> 00012345</p>
            <p><strong>Invoice Date: </strong> September 16, 2024</p>
            <p><strong>Due Date: </strong> September 30, 2024</p>
        </div>

        <!-- Invoice Table -->
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Development Services</td>
                    <td>1</td>
                    <td>$1,500.00</td>
                    <td>$1,500.00</td>
                </tr>
                <tr>
                    <td>UI/UX Design</td>
                    <td>1</td>
                    <td>$800.00</td>
                    <td>$800.00</td>
                </tr>
                <tr>
                    <td>SEO Optimization</td>
                    <td>1</td>
                    <td>$500.00</td>
                    <td>$500.00</td>
                </tr>
            </tbody>
        </table>

        <!-- Totals -->
        <div class="totals">
            <p>Subtotal: $2,800.00</p>
            <p>Tax (10%): $280.00</p>
            <p><strong>Total Amount: $3,080.00</strong></p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you for your business!</p>
        </div>

    </div>

</body>
</html>
