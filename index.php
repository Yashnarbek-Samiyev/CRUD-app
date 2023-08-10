<!DOCTYPE html>
<?php
//username, user pass, host, db name
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Management CRUD App</title>
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
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Student</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addStudentModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>

                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Subject</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                        $get_all_stds = "SELECT * from std";
                        $objects = mysqli_query($con, $get_all_stds);
                        while($row = mysqli_fetch_array($objects)){
                            $sid =  $row['sid'];
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
                            <td><?php echo $fname ?></td>
                            <td><?php echo $lname ?></td>
                            <td><?php echo $fathername ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $gender ?></td>
                            <td><?php echo $subject ?></td>
                            <td><?php echo $country ?></td>
                            <td><?php echo $city ?></td>
                            <td><?php echo $dob ?></td>
                            <td><?php echo $address ?></td>
                            <td>
                                <img src="img/<?php echo $picture ?>" width="40px" height="40px" alt="img">
                            </td>



                            <td>
                                <a href="edit.php?edit=<?php echo $sid; ?>" class="edit" data-toggle=""><i
                                        class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="del.php?del=<?php echo $sid; ?>" class="delete" data-toggle=""><i
                                        class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addStudentModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Father Name</label>
                            <input type="text" name="fathername" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" id="" class="form-control">
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
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" name="dob" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="file" name="picture" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="addstd" class="btn btn-success" value="Add">
                    </div>

                </form>

                <?php
    
if(isset($_POST['addstd'])){
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

    $query = "INSERT INTO std (fname, lname, fathername, email, gender, ssub, country, city, dob, sadd, picture) values ('$fname', '$lname', '$fathername', '$email', '$gender', '$subject', '$country', '$city', '$dob', '$address', '$picture')";
    if (mysqli_query($con, $query)){
		echo "<script>window.open('index.php', '_self')</script>";

    }

}
    
    
    
    ?>
            </div>
        </div>
    </div>
</body>

</html>