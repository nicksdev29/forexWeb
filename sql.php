
// Connecting to the database
<?php
$host="localhost";
$user="root";
$pass="";
$db="samfxt"
// creat a connection
$con=mysqli_connect($host,$user,$pass,$db);

//creat a db
if($con) {
 echo "ok";
}
else
{
	echo " nahi hua";
}

?>
