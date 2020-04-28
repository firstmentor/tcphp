<?php 
include("connection.php");
$deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
$qurey=mysql_query("delete from  student where id='$deleteid' ");
$del=1;

header("location:studentlist.php");

}
?>
