<html>
<head>
<style>
table, th, td {
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
{   
echo "<tr><td> {$row['first_name']}</td>";
echo "<td> {$row['last_name']}</td>"; 
echo "<td> {$row['user_name']}</td>"; 
echo "<td> {$row['password']}</td>";
echo "<td> {$row['email_id']}</td>"; 
echo "<td> {$row['phone_no']}</td></tr>";
}

echo "</table>"; 


mysql_close(); 
?>
