<?php
// Step 1: Store names of students in an array
$students = array("John", "Jane", "Alice", "Bob", "Charlie");

// Step 2: Display the original array using print_r()
echo "Original array:\n";
print_r($students);

// Step 3: Sort the array in ascending order using asort()
asort($students);
echo "\nArray sorted in ascending order (asort):\n";
print_r($students);

// Step 4: Sort the array in descending order using arsort()
arsort($students);
echo "\nArray sorted in descending order (arsort):\n";
print_r($students);
?>
