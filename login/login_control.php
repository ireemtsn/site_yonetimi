<?php 
session_start();
require_once("../config/config.php");

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

if (!empty($user_email) && !empty($user_password)) {
    $sql = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
    $result = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_role'] = $row['user_role'];
        echo 1;
    } else {
        echo 0;
    }
}