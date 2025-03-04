<?php
session_start();
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;
// include 'functions.php';
$db = new Medoo();
$mobile_no = $_POST['mobile_number'];
$password = md5($_POST['password']);

$user = $db->get("users", "*", ["AND" => ['mobile_no' => $mobile_no, 'password' => $password]]);

if ($user) {
   // $user = $user[0];
    if ($user['deleted'] == 0 ) {
        $_SESSION['user'] = $user;
        header("location:index.php");
    } else {

        echo '<script>alert("Invalid User"); window.history.back(); </script>';
    }
} else {

  echo '<script>alert("incorrect user name/password ,please try again."); window.history.back();</script>';
}
