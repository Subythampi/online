<?php 
include('adminpage.php');
if(isset($_POST['submit']))
{
        $old = $_POST['old'];
		$new = $_POST['new'];
		$cf = $_POST['cf'];
		$id = $_POST['id'];
   $query = mysql_query("UPDATE reg_table SET password='$new' WHERE id=''$id");
	}	
 ?>

<html>
<head>
<script>
<title>reset password</title>
nav{
    float: left;
    max-width: 500px;
    margin: 100;
    padding: 1em;

 }
</script>
</head>
<body>
<nav>
<h2>Reset your Password</h2>
<form action="adminpage.php" method="POST">
<table>
<center>
<tr>
<td><label>Enter your old password</label></td>
<td><label><input type="password" name="old" required></label></td>
</tr>

<tr>
<td><label>Enter your new password</label></td>
<td><label><input type="password" name="new" required></label></td>
</tr>

<tr>
<td><label>Confirm your new password</label></td>
<td><label><input type="password" name="cf" required></label></td>
</tr>
</center>
</table>
<br><br>
<center><input type="submit" name="submit"></center>
</nav>
</form>
</body>
</html>