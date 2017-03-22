
<?php
include('config.php');
include('adminpage.php');
if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$delete=mysql_query("delete from reg_table where id='$id'");
		if($delete)
		{
			header('location:list.php');
		}
	}
?>