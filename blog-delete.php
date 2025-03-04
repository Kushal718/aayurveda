<?php
require '../vendor/autoload.php'; // Include Medoo

include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();

// Get the medicine_id to delete (you should validate and sanitize user input)
$blogIdToDelete = $_REQUEST['blog_id'];

// Delete data from the "medicines" table based on the medicine_id
$deleteResult = $database->delete('blogs', ['blog_id' => $blogIdToDelete]);

if ($deleteResult) {
    // Data was deleted successfully
    echo alert('Successful', 'Blog  Deleted!', true);
    echo "<script>window.location='blog.php';</script>";
   
} else {
    echo alert('Error', 'While Deleting Blog!', false);
    echo "<script>window.location='blog.php';</script>";
   
}
?>
