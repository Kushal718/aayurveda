<?php 
require '../vendor/autoload.php'; // Include Medoo
include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();

$diseaseIdToUpdate = $_POST['disease_id'];
$medicine_ids =implode(', ', $_POST['medicine']);
$symptoms_ids =implode(', ', $_POST['symptoms']);
$descriptions=$_POST['description'];
$disease_name=$_POST['disease_name'];
$do_s=implode(', ' ,$_POST['do_s']);
$don_t=implode(', ',$_POST['don_t']);


$data = [
    'disease_name'=>$disease_name,
    'medicine_id' => $medicine_ids,
    'symptoms_id' => $symptoms_ids,
    'description' => $descriptions,
    'do_s'=>$do_s,
    'don_t'=>$don_t,
    
       // You should validate and sanitize user inputs before inserting them into the database
];
$updateResult = $db->update('diseases', $data, ['disease_id' => $diseaseIdToUpdate]);

// Insert data into the "medicines" table
//$deseases = $db->insert('diseases', $data);
if ($updateResult) {
    echo alert('Successful', 'Disease  updated!', true);
      echo "<script>window.location='diseases.php';</script>";
   
}
else
{
    echo alert('Faild ', 'Error While updating Disease!', false);
    echo "<script>window.location='disease-update.php';</script>";
   
}
?>