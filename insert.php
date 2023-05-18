<?php

include "config.php";
// insert into database inputs from from
$first_name = $_POST['inputFName'];
$family_name = $_POST['inputFamName'];
$email = $_POST['inputEmail'];
$item = $_POST['inputNumberItem'];
$product = $_POST['inputProduct'];
$size = $_POST['inputSize'];

if (!empty($first_name) || !empty($family_name) || !empty($email) || !empty($item) || !empty($product) || !empty($size)) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itcc11"; 
    // Establish connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From orders Where email = ? Limit 1";
        $INSERT = "INSERT INTO `orders` (`first_name`, `family_name`, `email`, `item`, `product`, `size`) values('$first_name', '$family_name', '$email', '$item', '$product', '$size')";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssiss", $first_name, $family_name, $email, $item, $product, $size);
            $stmt->execute();
            // Message to display on the reservation page
            $message = "Thank you for your reservation. We will contact you shortly.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("refresh:0; url=index.php");
            // Redirect to homepage

        } else {
            // Message dialog box then return to homepage
            echo "<script type='text/javascript'>alert('Someone already reserved that email');</script>";
            header("refresh:0; url=index.php");  
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All field are required";
    die();
}

?>

