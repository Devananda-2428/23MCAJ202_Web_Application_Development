<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = "";
$alertMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $alertMessage .= "Name is required.\\n";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
        $alertMessage .= "Email is required.\\n";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $alertMessage .= "Invalid email format.\\n";
    } else {
        $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["password"])) {
        $alertMessage .= "Password is required.\\n";
    } elseif (strlen($_POST["password"]) < 6) {
        $alertMessage .= "Password must be at least 6 characters.\\n";
    } else {
        $password = test_input($_POST["password"]);
    }
    
    if (!empty($alertMessage)) {
        echo "<script>alert(\"$alertMessage\");</script>";
    }else{
        echo"<script>alert('Form Successfully Submitted!');</script>";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="name" placeholder="Enter your Name" value="<?php echo $name; ?>"><br>
            <input type="text" name="email" placeholder="Enter your Email" value="<?php echo $email; ?>"><br>
            <input type="password" name="password" placeholder="Enter your Password"><br>
            <input type="submit" value="REGISTER">
        </form>
    </div>
</body>
</html>
