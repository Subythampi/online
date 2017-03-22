<html>
<head>
<style>
th, td {
    border: 1px solid black;
}
</style>

</head>
<body>
 <table>

</body>
</html>
<?php 
include('adminpage.php'); 
include('config.php');
$sql = mysql_query("SELECT * from reg_table"); 

echo "<table>";


while($row = mysql_fetch_array($sql))
{   ?>

<tr><td> <?php echo $row['id']; ?></td>
<td>  <?php echo $row['first_name']; ?> </td>
<td>  <?php echo $row['last_name']; ?></td>
<td> <?php echo $row['user_name']; ?></td>
<td> <?php echo $row['password']; ?></td>
<td> <?php echo $row['email_id']; ?></td>
<td> <?php echo $row['phone_no']; ?></td>
<td> <a href='delete.php?id=<?php echo $row['id']; ?>'>delete</a></td></tr>
<?php
}

echo "</table>"; 


mysql_close(); 
?>

