<!DOCTYPE HTML>
<html>
<body>
<center><h2>Registration Form</h2></center>
<br> 
<?php
include("DBConnection.php"); 
$id=$_POST["pid"];
$name=$_POST["name"];
$age=$_POST["age"];
$address=$_POST["address"];
$doa=$_POST["doa"];
$docname=$_POST["docname"];
$medname=$_POST["medname"];
$query = "insert into patient(pid,name,age,address,doa,docname,medname) values('$id','$name','$age','$address','$doa','$docname','$medname')";
$result = mysqli_query($db,$query);
if($result)
{
    echo"<center><b> NEW PATIENT INFORMATION ENTERED SUCCESSFULLY!!</b></center>";
    echo"<br/><center><b> For viewing : </b></center>";
    echo"<br/><center><a href='coviddetail.php'> Click here>> </a></center>";

}
else{
    
    echo"<script> alert('DATABASE INSERTION FAILED')</script>";
}
?>
<h3> Registration information is inserted successfully </h3>
</html>