<?php
require '../vendor/autoload.php'; // Include Medoo
include 'functions.php';
// Database configuration
use Medoo\Medoo;

$db = new Medoo();


if (isset($_FILES['image'])) {
    $uploadPath = '../images/'; // Specify the directory where you want to save the uploaded files

    // Move the uploaded file to the specified directory
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $fileExtension;
    $destination = $uploadPath . $newFileName;
    $image=$destination;
    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    // Save the file information to the database

}



// Data to insert
$data = [
    'medicine_name' => $_POST['medicine_name'],
    'prakriti' => $_POST['prakriti'],
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'season' => $_POST['season'],
    'ingredients' =>implode(', ' ,$_POST['ingredients']),
    'special_condition' => $_POST['special_condition'],
    'dose' => $_POST['dose'],
    'description' => $_POST['description'],
    'image'=>$newFileName,
    // You should validate and sanitize user inputs before inserting them into the database
];

// Insert data into the "medicines" table
$insertResult = $db->insert('medicines', $data);

if ($insertResult) {
    echo alert('Successful', 'Medicine  Added!', true);
     echo "<script>window.location='medicines.php';</script>";
   
}
else
{
    echo alert('Faild ', 'Error While Adding Medicine!', false);
    echo "<script>window.location='medicine-add.php';</script>";
   
}
?>
