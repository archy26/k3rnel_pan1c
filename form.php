<?php

if(isset($_POST['submitted'])){
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobno=$_POST['mobno'];
$emailid=$_POST['emailid'];
$gender=$_POST['Gender'];
$gyear=$_POST['gyear'];
$qual=$_POST['qual'];
$add=$_POST['add'];
$dob=$_POST['dob'];
$marstatus=$_POST['marstatus'];
$anniversary=$_POST['anniversary'];
$sqlinsert="INSERT INTO PROJECT(FIRST_NAME,LAST_NAME,MOBILE_NO,EMAIL_ID,GENDER,DOB,GRADUATION_YEAR,QUALIFICATION,ADDRESS,MARTIAL_STATUS,ANNIVERSARY) VALUES ('$fname','$lname','$mobno','$emailid','$gender','$dob','$gyear','$qual','$add','$marstatus','$anniversary')";
if(!mysqli_query($dbcon,$sqlinsert))
die("error inserting data");
}

include('temp.php');
 

?>
