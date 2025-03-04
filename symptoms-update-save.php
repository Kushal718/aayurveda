<?php
session_start();
include 'functions.php';

//require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo;

$symptoms_id = $_POST['symptoms_id'];
$symptoms = $_POST['symptoms'];
$details = $_POST['details'];

$symptoms = $db->update("symptoms", ['symptoms_name' => $symptoms, 'details' => $details], ['symptoms_id' => $symptoms_id]);
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
