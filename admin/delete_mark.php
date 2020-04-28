<?php 
include("connection.php");
$deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
$qurey=mysql_query("delete from  marksheet where id='$deleteid' ");
$del=1;

header("location:marksheet.php");

}
?>
