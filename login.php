<?php
session_start();

$valid_username = "b201210555@sakarya.edu.tr";
$valid_password = "b201210555";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION["username"] = $username;
        echo "Hoşgeldiniz " . htmlspecialchars($username);
    } else {
        header("Location: index.html#login");
        echo "<script>alert('Invalid credentials');</script>";
    }
} else {
    header("Location: index.html#login");
}
?>
