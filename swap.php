<html>
<head>
<title>swap</title>
</head>
<body>
<h2>Swap Two Numbers</h2>
<?php
// Initializing two numbers
$num1 = 10;
$num2 = 20;

// Displaying the numbers before swap
echo "Before swapping: \n";
echo "Number 1: $num1 \n";
echo "Number 2: $num2 \n";

// Swapping the numbers
$temp = $num1;  // Store num1 in temp variable
$num1 = $num2;  // Assign the value of num2 to num1
$num2 = $temp;   // Assign the value of temp (original num1) to num2

// Displaying the numbers after swap
echo "\nAfter swapping: \n";
echo "Number 1: $num1 \n";
echo "Number 2: $num2 \n";
?>
</body>
</html>

