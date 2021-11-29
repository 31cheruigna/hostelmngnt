<?php
// database connection code
if(isset($_POST['Fname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','details');

// get the post records

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$IDNo = $_POST['IDNo'];
$EMAIL = $_POST['EMAIL'];
$Gender = $_POST['Gender'];
$TNo = $_POST['TNo'];
$RoomNo = $_POST['RoomNo'];
$Contact = $_POST['Contact'];

// database insert SQL code
$sql = "INSERT INTO `students` (`Fname`, `Lname`, `IDNo`, `EMAIL`, `Gender`,'TNo','RoomNo', 'Contact') VALUES ('$Fname', '$Lname', '$IDNo', '$EMAIL', '$Gender','$TNo','$RoomNo','$Contact')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
