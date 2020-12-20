<?php
session_start();
$con=mysqli_connect('localhost','root','',"sohel's bank");
$name1=$_POST['sender'];
$q="select Balance from customers where Name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['Balance'];
$from=$_POST['sender'];
$to=$_POST['receiver'];
$q1="select Balance from customers where Name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['Balance'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customers set Balance='$sub' where Name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customers set Balance='$sum' where Name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into ministatement(Sender,Receiver,Amount)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'viewuser.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'viewuser.php';

}
?>