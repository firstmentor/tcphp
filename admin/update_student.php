<?php include("session.php");
include("connection.php");
$editid=addslashes($_POST['editid']);
$name=addslashes($_POST['name']);
$fname=addslashes($_POST['fname']);
$mname=addslashes($_POST['mname']);
$phone=addslashes($_POST['phone']);
$dob=addslashes($_POST['dob']);
$class=addslashes($_POST['class']);
$roll=addslashes($_POST['roll']);
$address=addslashes($_POST['address']);

$query=mysql_query("update student set name='$name',fname='$fname',mname='$mname',class='$class',rollno='$roll',dob='$dob',phone='$phone',address='$address' where id='$editid'");
if($query)
{
				
	header("location:studentlist.php");
}

	
?>