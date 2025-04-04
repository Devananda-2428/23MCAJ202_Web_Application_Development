<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Array Sorting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 50%;
            margin: auto;
            text-align: center;
        }
        pre {
            font-size: 16px;
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Original Array</h2>
        <pre>
        <?php
        $students=array("Anu","Siya","Bella","Krishna","George");
        print_r($students);
        ?>
        </pre>
        
        <h2>Array in Ascending Order</h2>
        <pre>
        <?php
        asort($students);
        print_r($students);
        ?>
        </pre>
        
        <h2>Array in Descending Order</h2>
        <pre>
        <?php
        arsort($students);
        print_r($students);
        ?>
        </pre>
    </div>
</body>
</html>