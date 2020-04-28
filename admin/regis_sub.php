<?php include("session.php");
include("connection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$class=$_POST['class'];
$roll=$_POST['roll'];
$address=$_POST['address'];
/*$name=addslashes($_POST['name']);
$fname=addslashes($_POST['fname']);
$mname=addslashes($_POST['mname']);
$phone=addslashes($_POST['phone']);
$dob=addslashes($_POST['dob']);
$class=addslashes($_POST['class']);
$roll=addslashes($_POST['roll']);
$address=addslashes($_POST['address']);*/

echo $query=("insert into student(name,fname,mname,class,rollno,dob,phone,address) values('$name','$fname','$mname','$class','$roll','$dob','$phone','$address')");
	$run=mysqli_query($conn,$query);
if($run)
{
				
	header("location:studentlist.php");
}

	
?>