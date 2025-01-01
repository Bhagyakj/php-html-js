<?php
// Array of Indian cricket players
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "MS Dhoni",
    "Shubman Gill",
    "Hardik Pandya",
    "KL Rahul",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "Rishabh Pant",
    "Mohammed Shami"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">List of Indian Cricket Players</h2>

    <!-- Table to display player names -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Player Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the array and display player names
            $index = 1;
            foreach ($players as $player) {
                echo "<tr><td>{$index}</td><td>{$player}</td></tr>";
                $index++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>
