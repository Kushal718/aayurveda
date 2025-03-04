<?php
require '../vendor/autoload.php'; // Include Medoo
include 'functions.php';
// Database configuration
$db = new \Medoo\Medoo();

// Get the medicine_id to update (you should validate and sanitize user input)
$blogIdToUpdate = $_POST['blog_id'];
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
// Data to update
$data = [
    'blog_name' => $_POST['blog_name'],
    'blog_details' => $_POST['blog_details'],
     // You should validate and sanitize user inputs before updating them in the database
];
$photo = $_FILES['blog_image']['name'];
if ($photo != "") {


    $uploadPath = '../images/'; // Specify the directory where you want to save the uploaded files

    // Move the uploaded file to the specified directory
    $fileExtension = pathinfo($_FILES['blog_image']['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $fileExtension;
    $destination = $uploadPath . $newFileName;
    $image=$destination;
    move_uploaded_file($_FILES['blog_image']['tmp_name'], $destination);
   
    $data = array_merge($data, ['blog_image' => $newFileName]);
}
// Update data in the "medicines" table based on the medicine_id
$updateResult = $database->update('blogs', $data, ['blog_id' => $blogIdToUpdate]);

if ($updateResult) {
    echo alert('Successful', 'Blog  Updated!', true);
    echo "<script>window.location='blog.php';</script>";
} else {
    echo alert('Error', 'While adding Blog', false);
    echo "<script>window.location='blog-update.php';</script>";
}
?>
