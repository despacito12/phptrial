<?php

include('dbconnect.php');

$entry_no = $_GET['entry_no'];
$brand = $_GET['brand'];
$model = $_GET['model'];

$query = "UPDATE info SET brand ='$brand' , model = '$model' WHERE entry_no = '$entry_no'";

if(mysqli_query($conn,$query)){

	header("Location:home.php");
}
else{

	echo"Error";
}

mysqli_close($conn);

?>