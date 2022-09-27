<?php


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["form"])) {
        if (empty($email) || empty($number)) {
            echo "Email and Phone Number is Required !";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Not a valid email Address !";
            }
            if (is_int($number) != 1) {
                echo "Phone number must be a Number !";
            }
        }
    }
}
