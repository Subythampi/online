<?php
include('config.php');
if(isset($_POST['submit']))
{
$user=$_POST['user_name'];
$pass=$_POST['password'];
$sql=mysql_query("select * from reg_table where user_name ='$user' and password = '$pass' and status=1");
$row=mysql_fetch_array($sql);
if($row['role']==2)
{
  header("location:adminpage.php");
}
else if($row['role']==1)
{
	header("location:loan2.php");
}
else
{
 echo '<script>
 alert("Incorrect Username or Password");
 </script>';
}		 
mysql_close($con);
}
?>
<html>
<head>
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

 div {
    background-color:#8aafea;
    width: 400px;
    border: 5px solid black;
    padding: 30px;
	postion: absolute;
    bottom: 0;
}
.btn
	{
		cursor:pointer;
		display:inline-block;
		border:1px solid black;
		border-radius:10px;
		margin-left:15px;
		padding:10px 10px;
	}
</style>
</head>
<body>

<header>
<h2>online loan applicaton</h2>
</header>
<center>
<div>
<form method="post">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="user_name" required></td><br><br>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" required></td><br><br><br>
</tr>
</table>

<left><input type="submit" value="Login" name="submit" class="btn"></left>
<a href="forgotpass.php">forgot password?</a>
</div>

</center>

<footer>
&copy; KGiSL-IAS
</footer>
</form>
</body>
</html>
