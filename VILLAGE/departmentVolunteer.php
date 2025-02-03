
<?php
session_start();
include("dbconnection.php");
$sql ="select * from volunteer where departmentid='$_GET[deptid]'";
$qsql = mysqli_query($con,$sql);
echo "<select class='selectpicker' name='vol' id='vol'  >";
while($qsql1=mysqli_fetch_array($qsql))
{	
	echo "<option value=''>Select volunteer</option>";
	echo "<option value='$qsql1[volunteerid]'>$qsql1[volunteername]</option>";		
}
echo "</select>"
?>	          
