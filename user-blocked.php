<?php
include '../functions.php';
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();

$user_id = $_REQUEST['user_id'];
$user = $db->select("admin", "*", ['user_id' => $user_id])[0];
//print_r($user);
if ($user['is_blocked'] == 0) {
    $user_block = $db->update("users", ['is_blocked' => 1], ['user_id' => $user_id]);
    // echo alert('Successful', 'User is blocked!', true);
   
    echo "<script>alert('User is blocked Successfuly!');window.location='users.php'</script>";

} else {
    $user_block = $db->update("users", ['is_blocked' => 0], ['user_id' => $user_id]);
    echo "<script>alert('User is Unblocked Successfuly!');window.location='users.php'</script>";

    // echo "<a  href='#' class='btn btn-sm btn-primary remove-item-btn'>Block</a>";
    // echo alert('Successful', 'User is Unblocked!', true);
    // header("location:users.php");
}
