<?php
require '../vendor/autoload.php'; // Include Medoo

include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();

// Get the medicine_id to delete (you should validate and sanitize user input)
$feedbackIdToDelete = $_REQUEST['id'];

// Delete data from the "medicines" table based on the medicine_id
$deleteResult = $database->delete('feedback', ['feedback_id' => $feedbackIdToDelete]);

if ($deleteResult) {
    // Data was deleted successfully
    echo alert('Successful', 'Feedback  Deleted!', true);
    echo "<script>window.location='feedback-all.php';</script>";
   
} else {
    echo alert('Error', 'While Deleting Feedback!', false);
    echo "<script>window.location='feedback-all.php';</script>";
   
}
?>
