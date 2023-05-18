<?php
// update row in database where email matches

$id = $_POST['id_to_update'];
$first_name = $_POST['updateFName'];
$middle_name = $_POST['updateMName'];
$family_name = $_POST['updateFamName'];
$email = $_POST['updateEmail'];
$guests = $_POST['updateNumberGuests'];
$hotel = $_POST['updateHotel'];
$room = $_POST['updateRoom'];
$check_in = $_POST['updateArrival'];
$check_out = $_POST['updateDeparture'];

$host = "sql300.epizy.com";
$dbUsername = "epiz_34228434";
$dbPassword = "riaeUwWefzA";
$dbname = "epiz_34228434_itcc40";

 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
 if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        // ask user for confirmation
        $sql = "UPDATE reservations SET first_name = '$first_name', middle_name = '$middle_name', family_name = '$family_name', email = '$email', guests = '$guests', hotel = '$hotel', room = '$room', check_in = '$check_in', check_out = '$check_out' WHERE email = '$id'";
        if ($conn->query($sql)) {
            echo "<script type='text/javascript'>alert('Reservation Updated');</script>";
            
        } else {
            echo "Error" . $conn->error;
        }
        header("refresh:0; url=index.php");
        $conn->close();
    }   



?>