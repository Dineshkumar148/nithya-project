<?php
require('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $staffname = $_POST['staffname'];
    $phonenumber = $_POST['phonenumber'];

    $sql = "INSERT INTO createstaff (staffname, phonenumber) VALUES ('$staffname', '$phonenumber')";

    if ($conn->query($sql) === TRUE) {
        header("Location: staff-list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
