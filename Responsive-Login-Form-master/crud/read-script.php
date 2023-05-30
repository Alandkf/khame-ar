<?php

include('C:\xampp\htdocs\khame2\config.php');

$fetchData= fetch_data($conn);

function fetch_data($conn){

$query="SELECT * from tb_user ORDER BY id ASC"; //or DESC

$exec=mysqli_query($conn, $query);

if(mysqli_num_rows($exec)>0){

$row= mysqli_fetch_all($exec, MYSQLI_ASSOC);

return $row;

}else{

return $row=[];

}

}

?>