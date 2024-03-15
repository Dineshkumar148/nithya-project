<?php
require('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $department = $_POST['department'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $datejoin = $_POST['datejoin'];
    $institution = $_POST['institution'];
    $sql = "INSERT INTO cstudentreate (firstname, lastname, dob,
    department, phonenumber,
    datejoin,  institution,address )
    VALUES ('$firstname', '$lastname', '$dob', '$department', '$phonenumber', 
    
    '$datejoin', '$institution' ,'$address')";

    if ($conn->query($sql) === TRUE) {
        header("Location: student-list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

