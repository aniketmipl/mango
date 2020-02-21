<?php
$connect = mysqli_connect("localhost","root","","mangoholiday")or die("database connection failed");

date_default_timezone_set('Asia/Calcutta'); 
$date = date("Y-m-d"); // time in India

$melava = $_GET['melava'];

$select_melava = "SELECT * FROM melava WHERE `melava_name`='$melava' AND `date`='$date'";
$melava_data = mysqli_query($connect,$select_melava);

if(mysqli_num_rows($melava_data) > 0){
	$row = mysqli_fetch_assoc($melava_data);
	$counter = $row['counter'];
	$date1 = $row['date'];
	$counter = $counter + 1;

	$update_melava = "UPDATE melava SET `counter`='$counter' WHERE `melava_name`='$melava' AND `date`='$date1'";
	$melava_update = mysqli_query($connect,$update_melava);
	header("location:https://mangoholidays.in/melava-registration-form");
}
else{
	$insert_melava = "INSERT INTO melava (`melava_name`,`counter`,`date`) VALUES('$melava','1','$date')";
	$melava_insert = mysqli_query($connect,$insert_melava);
	header("location:https://mangoholidays.in/melava-registration-form");
}	
?>