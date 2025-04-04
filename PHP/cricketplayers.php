<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2>Indian Cricket Players</h2>
    <table>
        <tr>
            <th>Sl. No.</th>
            <th>Player Name</th>
        </tr>
        <?php
        $players = array("Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Rahul Dravid");
        $count = 1;
        foreach ($players as $player) {
            echo "<tr><td>$count</td><td>$player</td></tr>";
            $count++;
        }
        ?>
    </table>
</body>
</html>
