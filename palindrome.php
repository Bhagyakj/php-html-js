<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number Checker</title>
</head>
<body>
    <h1>Check if a Number is a Palindrome</h1>

    <!-- Form to accept input number -->
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required placeholder="Enter a number">
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    // Function to check if a number is a palindrome
    function isPalindrome($num) {
        // Convert the number to a string
        $numStr = (string)$num;
        
        // Reverse the string
        $reversedStr = strrev($numStr);
        
        // Check if the original string is equal to the reversed string
        return $numStr === $reversedStr;
    }

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get the number input from the form
        $number = $_POST['number'];

        // Validate if the input is a valid positive number
        if (is_numeric($number) && $number >= 0) {
            // Check if the number is a palindrome
            if (isPalindrome($number)) {
                echo "<h3>$number is a palindrome.</h3>";
            } else {
                echo "<h3>$number is not a palindrome.</h3>";
            }
        } else {
            echo "<h3>Please enter a valid positive number.</h3>";
        }
    }
    ?>

</body>
</html>
