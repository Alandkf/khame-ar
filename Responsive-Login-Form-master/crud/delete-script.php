<?php

include('C:\xampp\htdocs\khame2\config.php');

if(isset($_GET['delete'])){

$id= $_GET['delete'];

delete_data($conn, $id);

}

// delete data query

function delete_data($conn, $id){

$query="DELETE from tb_user WHERE id=$id";

$exec= mysqli_query($conn,$query);

if($exec){

header('location:user-table.php');

}else{

$msg= "Error: " . $query . "<br>" . mysqli_error($conn);

echo $msg;

}

}

?>