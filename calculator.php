<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <form method="POST" action="">
        <!-- Input fields for numbers -->
        <input type="number" name="number1" required placeholder="Enter first number">
        <input type="number" name="number2" required placeholder="Enter second number">
        
        <!-- Select for operation -->
        <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        
        <!-- Submit button -->
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get input values from form
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $operation = $_POST['operation'];

        // Function to perform calculation
        function calculate($num1, $num2, $operation) {
            switch ($operation) {
                case 'add':
                    return $num1 + $num2;
                case 'subtract':
                    return $num1 - $num2;
                case 'multiply':
                    return $num1 * $num2;
                case 'divide':
                    if ($num2 == 0) {
                        return "Error! Division by zero.";
                    } else {
                        return $num1 / $num2;
                    }
                default:
                    return "Invalid operation.";
            }
        }

        // Calculate and display the result
        $result = calculate($num1, $num2, $operation);
        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>
