<?php
header('Content-Type: application/json');
$action = $_POST['action'];
 function read_data(){
    include 'conn.php';
    $cn = $con; 
    $id = $_POST['totalId'];
    $data = array();
    $message = array();

    $sql = "SELECT * FROM visas WHERE id='$id'";
    $q = mysqli_query($cn,$sql);
    if($q){
        while($row = mysqli_fetch_assoc($q)){
            $data [] = $row;
        }

        $message = array("status"=>true,"data"=>$data);
    }
    else{
        $message = array("status"=>false,"data"=>$cn->error);
    }

    echo json_encode($message);
}
if(isset($_POST['action'])){
   
$action();
}







?>

     
     

        
     
