<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5c8df6;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .no-result {
            text-align: center;
            margin-top: 40px;
            color: #666;
            font-size: 18px;
        }
    </style>
</head>
<body>
<?php
include 'db.php';

$title = $_GET['title'];
$title = mysqli_real_escape_string($conn, $title);

$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
$result = mysqli_query($conn, $sql);

echo "<h2>Search Results for '$title'</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>Accession No</th>
                <th>Title</th>
                <th>Authors</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['accession_no']}</td>
                <td>{$row['title']}</td>
                <td>{$row['authors']}</td>
                <td>{$row['edition']}</td>
                <td>{$row['publisher']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<div class='no-result'>No books found with the given title.</div>";
}

mysqli_close($conn);
?>
</body>
</html>

