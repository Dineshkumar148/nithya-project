<?php
require('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $staffuserid = $_POST['staffuserid'];
    $password = $_POST['password'];
    $position = $_POST['position'];
    $joindate = $_POST['joindate'];
    $degeree = $_POST['degeree'];
    $field = $_POST['field'];
    $institution = $_POST['institution'];
    $graduationyear = $_POST['graduationyear'];
    $pwork = $_POST['pwork'];
    $positionheld = $_POST['positionheld'];
    $experiance = $_POST['experiance'];
    $sql = "INSERT INTO createstaff (firstname, lastname, dob, email, 
    department, phonenumber,  staffuserid,position,
    joindate, degeree, field, institution, graduationyear, pwork, positionheld,experiance ,address, password) 
    VALUES ('$firstname', '$lastname', '$dob', '$email', '$department', '$phonenumber', 
     '$staffuserid',  '$position', '$address','$password',
    '$joindate', '$degeree', '$field', '$institution', '$graduationyear','$pwork', '$positionheld','$experiance')";

    if ($conn->query($sql) === TRUE) {
        header("Location: staff-list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
