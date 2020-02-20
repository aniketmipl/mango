<?php
$mysql_connect = mysql_connect("localhost","root","")or die("database connection failed");

$sel_db= mysql_select_db("mangoholiday") or die("database not connected");

date_default_timezone_set('Asia/Calcutta'); 
$date = date("Y-m-d"); // time in India

$melava = $_GET['melava'];

$select_melava = "SELECT * FROM melava WHERE `melava_name`='$melava' AND `date`='$date'";
$melava_data = mysql_query($select_melava);

if(mysql_num_rows($melava_data) > 0){
	$row = mysql_fetch_assoc($melava_data);
	$counter = $row['counter'];
	$counter = $counter + 1;

	$update_melava = "UPDATE melava SET `counter`='$counter' WHERE `melava_name`='$melava' AND `date`='$date1'";
	$melava_update = mysql_query($update_melava);
	header("location:https://mangoholidays.in/melava-registration-form");
}
else{
	$insert_melava = "INSERT INTO melava (`melava_name`,`counter`,`date`) VALUES('$melava','1','$date')";
	$melava_insert = mysql_query($insert_melava);
	header("location:https://mangoholidays.in/melava-registration-form");
}	
?>