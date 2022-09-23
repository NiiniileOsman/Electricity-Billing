<?php
header('Content-Type: application/json');
$action = $_POST['action'];
 function read_data(){
    $con=mysqli_connect("localhost", "root", "", "myproject");
    $con = $con; 
    $id = $_POST['FullName'];
    $data = array();
    $message = array();

    $sql = "SELECT * FROM customer WHERE FullName='$id'";
    $q = mysqli_query($con,$sql);
    if($q){
        while($row = mysqli_fetch_assoc($q)){
            $data [] = $row;
        }

        $message = array("status"=>true,"data"=>$data);
    }
    else{
        $message = array("status"=>false,"data"=>$con->error);
    }

    echo json_encode($message);
}

function Invoice_data(){
    $con=mysqli_connect("localhost", "root", "", "myproject");
    $con = $con; 
    $id = $_POST['FullNames'];
    $data = array();
    $message = array();

    $sql = "SELECT * FROM Invoice WHERE FullName='$id'";
    $q = mysqli_query($con,$sql);
    if($q){
        while($row = mysqli_fetch_assoc($q)){
            $data [] = $row;
        }

        $message = array("status"=>true,"data"=>$data);
    }
    else{
        $message = array("status"=>false,"data"=>$con->error);
    }

    echo json_encode($message);
}


function Salary_data(){
    $con=mysqli_connect("localhost", "root", "", "myproject");
    $con = $con; 
    $id = $_POST['FullNamess'];
    $data = array();
    $message = array();

    $sql = "SELECT * FROM emp WHERE FullName='$id'";
    $q = mysqli_query($con,$sql);
    if($q){
        while($row = mysqli_fetch_assoc($q)){
            $data [] = $row;
        }

        $message = array("status"=>true,"data"=>$data);
    }
    else{
        $message = array("status"=>false,"data"=>$con->error);
    }

    echo json_encode($message);
}

if(isset($_POST['action'])){
   
$action();
}







?>

     
     

        
     
