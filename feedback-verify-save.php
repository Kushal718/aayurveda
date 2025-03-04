<?php
include 'header.php';

$id = $_POST['feedback_id'];
$fname = ucwords($_POST['firstname']);
$lname = ucwords($_POST['lastname']);
$email = $_POST['email'];;
$phone_no = $_POST['phone_no'];
$message = $_POST['message'];

$feedback = $db->update("feedback", ['is_verified' => 1], ['feedback_id' => $id]);

 if ($feedback) {
    alert('success', 'Feedback Verified', 1);
    header("location:feedback-verified.php");    
} 

else {
    alert('Error', 'Fail to verify, Please try again.', 0);
    header("location:feedback-unverified.php");
}
