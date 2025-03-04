<?php
require '../vendor/autoload.php'; // Include Medoo
include 'functions.php';
// Database configuration
$db = new \Medoo\Medoo();

// Get the medicine_id to update (you should validate and sanitize user input)
$medicineIdToUpdate = $_POST['medicine_id'];

// Data to update
$data = [
    'medicine_name' => $_POST['medicine_name'],
    'prakriti' => $_POST['prakriti'],
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'season' => $_POST['season'],
    'special_condition' => $_POST['special_condition'],
    'dose' => $_POST['dose'],
    'description' => $_POST['description'],
    'ingredients' =>implode(', ' ,$_POST['ingredients']),
    // You should validate and sanitize user inputs before updating them in the database
];
$photo = $_FILES['image']['name'];
if ($photo != "") {


    $uploadPath = '../images/'; // Specify the directory where you want to save the uploaded files

    // Move the uploaded file to the specified directory
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $fileExtension;
    $destination = $uploadPath . $newFileName;
    $image=$destination;
    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
   
    $data = array_merge($data, ['image' => $newFileName]);
}
// Update data in the "medicines" table based on the medicine_id
$updateResult = $database->update('medicines', $data, ['medicine_id' => $medicineIdToUpdate]);

if ($updateResult) {
    echo alert('Successful', 'Medicine  Updated!', true);
    echo "<script>window.location='medicines.php';</script>";
} else {
    echo alert('Error', 'While adding medicine', false);
    echo "<script>window.location='medicine-update.php';</script>";
}
?>
