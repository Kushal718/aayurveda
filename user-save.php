<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
include '../sms.php';
$db = new Database();
echo $mess_id = $_POST['mess_id'];
$name = $_POST['name'];
$mobile = $_POST['mobile_number'];
$address = $_POST['address'];
$username = $_POST['mobile_number'];
$password = md5($_POST['mobile_number']);
$security_key = $_POST['mobile_number'];
$type = $_POST['type'];
$can_login = $_POST['can_login'];
$gender = $_POST['gender'];
$birth_date = $_POST['birth_date'];
$other = $_POST['other'];
$salary = $_POST['salary'];


if (isset($_FILES['emp_photo'])) {
        $uploadPath = '../uploads/emp/'; // Specify the directory where you want to save the uploaded files

        // Move the uploaded file to the specified directory
        $fileExtension = pathinfo($_FILES['emp_photo']['name'], PATHINFO_EXTENSION);
        $newFileName = uniqid() . '.' . $fileExtension;
        $destination = $uploadPath . $newFileName;
        move_uploaded_file($_FILES['emp_photo']['tmp_name'], $destination);
        // Save the file information to the database
    }

//print_r($security_key);
$admin = $db->insert("admin", ['name' => $name, 'mobile' => $mobile,'photo'=>$destination, 'address' => $address, 'password' => $password, 'salary' => $salary, 'username' => $username, 'security_key' => $security_key, 'type' => $type, 'can_login' => $can_login, 'gender' => $gender, 'birth_date' => $birth_date, 'other_details' => $other, 'mess_id' => $mess_id]);
if ($admin) {
    echo alert('Successful', 'User Added!', true);
   echo "<script>window.location='users.php';</script>";
    if($admin['can_login']=='1')
    {
        $mess_name=$db->query("select name from mess_profile where mess_id = ".$mess_id)->fetchAll()[0]['name'];
        $msg="Dear ".$name." congratulations on your successful verification as an admin for ".$mess_name;
        sendSMS($mobile,$msg);
    }
} else {
    echo alert('Oops', 'Error While Adding User!', false);
    echo "<script>window.location='user-add.php';</script>";
    print_r($db->error());
}
