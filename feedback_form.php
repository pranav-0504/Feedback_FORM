<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$con){
        die("Connection to database is failed due to : ". mysqli_connect_error());
    }

    echo "Successfully connected to the database";

  
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fb = $_POST['fb'];
    $improvements = $_POST['improvements'];

    $sql = " INSERT INTO `feedback` (`First_Name`, `Last_Name`, `email`, `phone`, `fb`, `improvements`)
    VALUES ('$First_Name', '$Last_Name', '$email', '$phone', '$fb', '$improvements');";


    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    $con->close();



?>

<!-- HTML CHIPKA DO -->

