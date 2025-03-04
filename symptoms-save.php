<?php
session_start();
include 'functions.php';
//require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo;

$symptoms = $_POST['symptoms'];
$details = $_POST['details'];


$symptoms = $db->insert("symptoms", ['symptoms_name' =>$symptoms,'details'=>$details]);
if ($symptoms) {
    // echo "<script> alert('Data inserted successfully !'); window.location='customer-profile.php?customer_id=" . $customer_id . "';</script>";
    alert('Successful', 'Symptoms Added', 1); 
    echo "<script>window.location='symptoms.php';</script>";
   // header('location:expenses.php');
} else {
    alert('Oops!', 'Symptoms not added', 0);
    echo "<script>window.location='symptoms.php';</script>";
   // header('location:expenses.php');
}
