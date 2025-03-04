<?php
require '../vendor/autoload.php'; // Include Medoo
include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();


if (isset($_FILES['blog_image'])) {
    $uploadPath = '../images/'; // Specify the directory where you want to save the uploaded files

    // Move the uploaded file to the specified directory
    $fileExtension = pathinfo($_FILES['blog_image']['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $fileExtension;
    $destination = $uploadPath . $newFileName;
    $image=$destination;
    move_uploaded_file($_FILES['blog_image']['tmp_name'], $destination);
    // Save the file information to the database

}

// Data to insert
$data = [
    'blog_name' => $_POST['blog_name'],
    'blog_details' => $_POST['blog_details'],
    'blog_image' =>$newFileName
    // You should validate and sanitize user inputs before inserting them into the database
];

// Insert data into the "medicines" table
$insertResult = $db->insert('blogs', $data);

if ($insertResult) {
    echo alert('Successful', 'Blog  Added!', true);
    echo "<script>window.location='blog.php';</script>";
   
}
else
{
    echo alert('Faild ', 'Error While Adding Medicine!', false);
    echo "<script>window.location='medicine-add.php';</script>";
   
}
?>
