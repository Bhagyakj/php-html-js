<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h1>Check if a Number is Armstrong</h1>

    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required placeholder="Enter a number">
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    // Function to check if a number is Armstrong
    function isArmstrong($num) {
        // Convert the number to string to count digits
        $numStr = (string)$num;
        $numDigits = strlen($numStr);
        $sum = 0;
        
        // Calculate the sum of each digit raised to the power of the number of digits
        foreach (str_split($numStr) as $digit) {
            $sum += pow((int)$digit, $numDigits);
        }
        
        // Check if the sum is equal to the original number
        if ($sum == $num) {
            return true;
        } else {
            return false;
        }
    }

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get the input number from form
        $number = $_POST['number'];

        // Validate if the number is a positive integer
        if (is_numeric($number) && $number > 0) {
            // Check if the number is an Armstrong number
            if (isArmstrong($number)) {
                echo "<h3>$number is an Armstrong number.</h3>";
            } else {
                echo "<h3>$number is not an Armstrong number.</h3>";
            }
        } else {
            echo "<h3>Please enter a valid positive number.</h3>";
        }
    }
    ?>

</body>
</html>
