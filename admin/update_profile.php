<?php include('connection.php');

$id=$_POST['id'];
$username=addslashes($_POST['username']);
$password=addslashes($_POST['password']);


$sqlu=mysql_query("update admin set username='$username',password='$password' where id='$id'");

header("location: profile.php");
?>

