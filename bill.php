<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 14px;
            color: #555;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .result {
            background-color: #eaf7e3;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Electricity Bill Generator</h2>

        <!-- Form to input user details and units consumed -->
        <form method="POST" action="">
            <label for="customer_name">Customer Name:</label>
            <input type="text" name="customer_name" required placeholder="Enter your name">

            <label for="address">Address:</label>
            <input type="text" name="address" required placeholder="Enter your address">

            <label for="units">Units Consumed:</label>
            <input type="number" name="units" required placeholder="Enter the number of units consumed" min="1">

            <button type="submit" name="submit">Generate Bill</button>
        </form>

        <?php
        // PHP code to process the bill calculation
        if (isset($_POST['submit'])) {
            // Get user inputs
            $customer_name = htmlspecialchars($_POST['customer_name']);
            $address = htmlspecialchars($_POST['address']);
            $units = $_POST['units'];

            // Electricity rate per unit based on the number of units consumed (you can change this rate structure)
            if ($units <= 100) {
                $rate = 5; // Rate for 0-100 units: 5 units per unit
            } elseif ($units <= 300) {
                $rate = 7; // Rate for 101-300 units: 7 units per unit
            } else {
                $rate = 10; // Rate for 301+ units: 10 units per unit
            }

            // Calculate the total bill
            $total_amount = $units * $rate;

            // Output the bill
            echo "
            <div class='result'>
                <h3>Electricity Bill for $customer_name</h3>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Units Consumed:</strong> $units</p>
                <p><strong>Rate per Unit:</strong> $rate</p>
                <p><strong>Total Amount:</strong> Rs. $total_amount</p>
            </div>";
        }
        ?>
    </div>

</body>
</html>
