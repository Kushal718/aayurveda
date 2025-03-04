<?php
require '../vendor/autoload.php'; // Include Medoo

include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();

// Get the disease_id to delete (you should validate and sanitize user input)
$diseaseIdToDelete = $_REQUEST['disease_id'];

// Delete data from the "diseases" table based on the disease_id
$deleteResult = $database->delete('diseases', ['disease_id' => $diseaseIdToDelete]);

if ($deleteResult) {
    // Data was deleted successfully
    echo alert('Successful', 'disease  Deleted!', true);
    echo "<script>window.location='diseases.php';</script>";
   
} else {
    echo alert('Error', 'While Deleting disease!', false);
    echo "<script>window.location='diseases.php';</script>";
   
}
?>
