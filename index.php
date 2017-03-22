<?php
include('config.php');
if(isset($_POST['submit']))
{
$first=$_POST['first_name'];
$last=$_POST['last_name'];
$user=$_POST['user_name'];
$pass=$_POST['password'];
$email=$_POST['email_id'];
$phone=$_POST['phone_no'];

$query=mysql_query("INSERT INTO reg_table(first_name,last_name,user_name,password,email_id,phone_no) VALUES ('".$first."','".$last."','".$user."','".$pass."','".$email."','".$phone."')");
if($query)
{
header("location:log.php");
}
else
{
echo "failure";
}
}
?>
<html>
<head>
<title>loan application</title>
<style>
header{
	padding: 20px;
	background-color: grey;
	text-align: center;
}

footer{
	padding: 5px;
	background-color: grey;
    position: absolute;
	width: 100%;
	bottom: 0;
	text-align: center;
}
</style>
</head>
<body>
<form method="POST">
<table align="center">
<header>
<h1>Online Loan application</h1>
</header>
<br><br>
<h2 align="center">Register here to log in....</h2>
<tr>
<td><label>First name</label></td>
<td><label><input type="text" name="first_name" required></label></td>
</tr>

<tr>
<td><label>Last name</td></label>
<td><label><input type="text" name="last_name" required></label></td>
</tr>

<tr>
<td><label>Username</td></label>
<td><label><input type="text" name="user_name" required></label></td>
</tr>

<tr>
<td><label>Password</td></label>
<td><label><input type="password" name="password" required></label> </td>
</tr>

<tr>
<td><label>Email id</td></label>
<td><label><input type="text" name="email_id" required></label> </td>
</tr>

<tr>
<td><label>Phone number</td></label>
<td><label><input type="text" name="phone_no" required></label> </td>
</tr>

</table>
<br><br>
<tr>
<td><label><center><input type="submit" name="submit" value="Register"></center></label></td>
</tr>
<br>
<center><a href="log.php">already have an account?</a></center>
<footer>
Copyright&copy; KGiSL-IAS
</footer>
</form>
</body>
</html>
