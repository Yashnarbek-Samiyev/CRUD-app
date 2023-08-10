<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$user_pwd = "";
$db = "mystudents";
$con = mysqli_connect($servername, $username, $user_pwd, $db);

if(!$con){
    die("Connection is failed". mysqli_connect_error());
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php 
            if(isset($_GET['edit'])) {
                $id = $_GET['edit'];
                // echo $id;
                $get_std = "select * from std where sid='$id' ";
                $std_obj = mysqli_query($con, $get_std);
                while($row = mysqli_fetch_array($std_obj)){
                    $fname =  $row['fname'];
                    $lname =  $row['lname'];
                    $fathername =  $row['fathername'];
                    $email =  $row['email'];
                    $gender =  $row['gender'];
                    $subject =  $row['ssub'];
                    $country =  $row['country'];
                    $city =  $row['city'];
                    $dob =  $row['dob'];
                    $address =  $row['sadd'];
                    $picture =  $row['picture'];
              
        
        ?>

        <form method="post" action="#" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Edit Student</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="fathername" value="<?php echo $fathername; ?>" class="form-control"
                        required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" value="<?php echo $subject; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select name="country" id="" name="country" class="form-control">
                        <option value="<?php echo $country;?>"><?php echo $country;?></option>
                        <option value="pak">Pakistan</option>
                        <option value="usa">USA</option>
                        <option value="ind">India</option>
                        <option value="iran">Iran</option>
                        <option value="UE">Uzbekistan</option>
                        <option value="UE">US</option>
                        <option value="UE">UK</option>
                        <option value="UE">Tojikistan</option>
                        <option value="UE">Ukrain</option>
                        <option value="UE">China</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" value="<?php echo $city; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>DOB</label>
                    <input type="date" name="dob" value="<?php echo $dob; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address">
                    <?php echo $address; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="picture" class="form-control">
                    <img src="img/<?php echo $picture; ?>" width="50" height="50" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="update" class="btn btn-success" value="Update">
            </div>
        </form>
        <?php }} ?>
        <?php 
   if(isset($_POST['update'])) {
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $fathername =  $_POST['fathername'];
    $email =  $_POST['email'];
    $gender =  $_POST['gender'];
    $subject =  $_POST['subject'];
    $country =  $_POST['country'];
    $city =  $_POST['city'];
    $dob =  $_POST['dob'];
    $address =  $_POST['address'];
    $picture =  $_FILES['picture']['name'];
	$picture_tmp =  $_FILES['picture']['tmp_name'];

	move_uploaded_file($picture_tmp, "img/$picture");

    $update_user = "update std set fname='$fname', lname='$lname', fathername='$fathername', email='$email',gender='$gender',ssub='$subject',country='$country', city='$city',dob='$dob',sadd='$address',picture='$picture' where sid='$id'";
    if(mysqli_query($con, $update_user)){
        echo '<script>alert("Student is Updated.....")</script>';
        echo '<script>window.open("index.php", "_self")</script>';

    }
}
    
    
    ?>
    </div>
</body>

</html>