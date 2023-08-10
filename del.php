<?php
$servername = "localhost";
$username = "root";
$user_pwd = "";
$db = "mystudents";
$con = mysqli_connect($servername, $username, $user_pwd, $db);

if(!$con){
    die("Connection is failed". mysqli_connect_error());
}

if(isset($_GET['del'])) {
    $id = $_GET['del'];
    // echo $id;
    $del_std = "delete from std where sid='$id' ";
    if(mysqli_query($con, $del_std)){
        echo '<script>alert("Student is deleted....")</script>';
        echo '<script>window.open("index.php", "_self")</script>';

    }
}

?>