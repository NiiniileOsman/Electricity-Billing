<?php
session_start();
include_once 'includes/db.php';

$FullName = "";
$Phone = "";
$Salary = "";
$RegDate = "";
$empid = 0;




if (isset($_POST['save'])) {
	$FullName=$_POST['FullNamess'];
	$Phone=$_POST['Phone'];
	$Salary=$_POST['Salary'];
	$RegDate=$_POST['RegDate'];

	$sql= "insert into empsalary ( FullName, Phone, Salary , RegDate) VALUES ( '$FullName', '$Phone', '$Salary' ,'$RegDate')";
	if (mysqli_query($con, $sql)) { 
		echo "<script>alert('Employee Salary Registered Successfully');</script>";
		echo "<script>window.location.href='EmplooyeSalary.php'</script>";
	} else {
		   mysqli_close($con);
		}
   
    }                    

// For updating records
	if (isset($_POST['update'])){

		$empid=$_POST['empid'];
		$FullName=$_POST['FullName'];
		$Phone=$_POST['Phone'];
		$Salary=$_POST['Salary'];
		$RegDate=$_POST['RegDate'];

		mysqli_query($con, "update empsalary set  FullName= '$FullName' , Phone ='$Phone', Salary='$Salary', RegDate='$RegDate' where empid= $empid");

		echo "<script>alert('Employee Data Updated Successfully');</script>";
		header('location: EmplooyeSalary.php');
}

// For deleteing records
if (isset($_GET['delete'])) {
	$empid = $_GET['delete'];
	mysqli_query($con, "DELETE FROM empsalary WHERE empid=$empid");
	echo "<script>alert('Emplooye Salary Deleted Successfully');</script>";
	header('location: EmplooyeSalary.php');
}

?>