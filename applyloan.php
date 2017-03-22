<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$salary=$_POST['salary'];
$image=$_POST['image'];
$sql=mysql_query("INSERT INTO apply_table(name,dob,email,phone,gender,address,salary,image) VALUES ('".$name."','".$dob."','".$email."','".$phone."','".$gender."','".$address."','".$salary."','".$image."')");

if($sql)
{
header('loaction:success.php');
}
}

?>
<html>
<head>
<link rel="stylesheet" type="text/js" href="valid.js">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<form method="POST">
<center>
<h1>Application form</h1>
<table>
<center>
<tr>
<td><label>Name</label></td>
<td><label><input type="text" name="name" required></label></td>
</tr>

<tr>
<td><label>Date of Birth</label></td>
<td><label><input type="text" name="dob" required></label></td>
</tr>

<tr>
<td><label>Email id</label></td>
<td><label><input type="text" name="email" required></label></td>
</tr>

<tr>
<td><label>Phone no:</label></td>
<td><label><input type="text" name="phone" required></label></td>
</tr>

<tr>
<td><label>Gender</label></td>
<td><label><input type="radio" name="gender" required>Male</label></td>
<td><label><input type="radio" name="gender" required>Female</label></td>
</tr>

<tr>
<td><label>Address</label></td>
<td><label><textarea name="address"></textarea></label></td>
</tr>

<tr>
<td><label>Salary</label></td>
<td><select name="salary">
<option>select</option>
<option>Above 1 lakh</option>
<option>Above 5 lakh</option>
<option>Above 10 lakh</option></td><br><br>
</tr>
<tr>
<br><br>
<td>
<input type="file" name="fileToUpload" id="fileToUpload"><br>

</td>
</tr>
</center>
</table>
<input type="submit" name="submit">
<a href="log.php">Log out</a>

</form>
</body>
</html>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>