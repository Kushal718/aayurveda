<?php
session_start();
include 'functions.php';

//require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo;
$symptoms_id=$_REQUEST['id'];

$symptoms=$db->update("symptoms",['deleted'=>1],['symptoms_id'=>$symptoms_id]);
    if($symptoms){
        echo alert('Successful','Symptoms is deleted!',true);
        echo"<script>window.location='symptoms.php';</script>";
    }else{
       // echo mysqli_error()
       echo alert('Oops','Fail to delete Symptoms !',false);
       echo"<script>window.location='symptoms.php';</script>";

    }
