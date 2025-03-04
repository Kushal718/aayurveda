<?php
require '../vendor/autoload.php'; // Include Medoo

include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();

// Get the medicine_id to delete (you should validate and sanitize user input)
$medicineIdToDelete = $_REQUEST['medicine_id'];

// Delete data from the "medicines" table based on the medicine_id
$deleteResult = $database->delete('medicines', ['medicine_id' => $medicineIdToDelete]);

if ($deleteResult) {
    // Data was deleted successfully
    echo alert('Successful', 'Medicine  Deleted!', true);
    echo "<script>window.location='medicines.php';</script>";
   
} else {
    echo alert('Error', 'While Deleting Medicine!', false);
    echo "<script>window.location='medicines.php';</script>";
   
}
?>
