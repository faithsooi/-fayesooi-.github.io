<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","alumny");

    $email= $_POST['mail'];
    $pword = $_POST['passw'];

    $sql = "SELECT * FROM loyalumni WHERE email='$email' AND pass='$pword'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // $_SESSION['maile'] = $row['email'];
        header('Location: Afterlogin.php');
   }
    } else {
    echo"Data not found";
    }