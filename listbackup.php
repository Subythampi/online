<?php 
include('adminpage.php'); 
include('config.php');
$sql = mysql_query("SELECT * from reg_table"); 

echo "<table>";
<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>User</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>

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
