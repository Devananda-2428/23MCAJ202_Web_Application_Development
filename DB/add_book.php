<?php
include 'db.php';

$accession_no = $_POST['accession_no'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

$sql = "INSERT INTO books (accession_no, title, authors, edition, publisher)
        VALUES ('$accession_no', '$title', '$authors', '$edition', '$publisher')";

if (mysqli_query($conn, $sql)) {
    echo "Book added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
