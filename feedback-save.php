<?php

require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();

if ($_REQUEST['firstname'] != '' && $_REQUEST['lastname'] != '' && $_REQUEST['email'] != '' && $_REQUEST['phone_no'] != '' && $_REQUEST['message'] != '') {


    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone_no = $_REQUEST['phone_no'];
    $message = $_REQUEST['message'];

    $feedback = $db->insert("feedback", ['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'phone_no' => $phone_no, 'message' => $message]);

    if ($feedback) {

        echo "<script>window.location='thankyou.php';</script>";
    } else {
        echo "<script>alert('Error .... Feedback Not Submiited !');</script>";
        echo "<script>window.location='feedback.php';</script>";

        //echo alert('Successful', 'User Added!', true);
    }
} 
?>
