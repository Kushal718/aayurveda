<?php
session_start();
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();

$mobile = $_POST['mobile'];
$first = $_POST['first'];
$middle =$_POST['middle'];
$last = $_POST['last'];
$gender = $_POST['gender'];


$category=$_POST['category'];


$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']);
$data = $db->select("users", "mobile_no", ['mobile_no'=>$mobile]);
if($data!=null)
{
            echo "<script>alert('Mobile no already exist');</script>";

   echo"<script>window.history.back(); </script>";

}
 else {
    

if($password1 == $password2)
{
$signup = $db->insert("users", ['mobile_no'=>$mobile,'first'=>$first,'middle'=>$middle,'last'=>$last,'password' => $password1,'category'=>$category,'gender'=>$gender]);

}
else
{
        echo "<script>alert('Password is not match');</script>";

   echo"<script>window.history.back(); </script>";

}

if($signup)
{$lastInsertId = $db->id();
$user = $db->select("users", "*", ['user_id'=>$lastInsertId]);

if ($user != NULL) {
    $user = $user[0];
    
        $_SESSION['user'] = $user;
        
   echo "<script>window.location='index.php';</script>";

     
  
} }else {
            echo "<script>alert('Something Went Wrong');</script>";
 echo"<script>window.history.back(); </script>";
}

 }

