<?php

include('C:\xampp\htdocs\khame2\config.php');

if(isset($_GET['edit'])){

$id= $_GET['edit'];

$editData= edit_data($conn, $id);

}

if(isset($_POST['update']) && isset($_GET['edit'])){

$id= $_GET['edit'];

update_data($conn,$id);

}

function edit_data($conn, $id)

{

$query= "SELECT * FROM tb_user WHERE id= $id";

$exec = mysqli_query($conn, $query);

$row= mysqli_fetch_assoc($exec);

return $row;

}

function update_data($conn, $id){

$full_name= ($_POST['name']);

$username= ($_POST['username']);

$email_address= ($_POST['email_address']);

$password = ($_POST['password']);

$query="UPDATE tb_user
SET name='$full_name',
username= '$username',

email='$email_address',



password='$password' WHERE id=$id";

$exec= mysqli_query($conn,$query);

if($exec){

header('location:user-table.php');

}else{

$msg= "Error: " . $query . "<br>" . mysqli_error($conn);

echo $msg;

}

}

?>