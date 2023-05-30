<?php

include('read-script.php');

?>

<!DOCTYPE html>

<html>

<head>

<title>PHP CRUD Operations</title>

<style>

table, td, th {
position: relative;
border: 1px solid #ddd;

text-align: left;

}

table {
    
border-collapse: collapse;

max-width: 100%;

width:90%;

}

.table-data{
position: relative;
right: 100px;
width:65%;

float: right;

}

th, td {

padding: 15px;

}

body{

overflow-x: hidden;

}

* {

box-sizing: border-box;}

</style>

</head>

<body>

<div class="table-data">

<div class="list-title">

<h2>CRUD List</h2>

<h2><a href="C:\xampp\htdocs\khame2\registration.php">Insert
form</a></h2>

</div>

<table border="1">

<tr>

<th>S.N</th>

<th>Full Name</th>
<th>userName</th>
<th>Email</th>

<th>payment_type</th>

<th>Edit</th>

<th>Delete</th>

</tr>

1

2

<?php

if(count($fetchData)>0){

$sn=1;

foreach($fetchData as $data){

?> <tr>

<td><?php echo $sn; ?></td>

<td><?php echo $data['name']; ?></td>

<td><?php echo $data['username']; ?></td>

<td><?php echo $data['email']; ?></td>

<td><?php echo $data['password']; ?></td>
<td><?php echo $data['payment_type']; ?></td>

<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>

<td><a href="delete-script.php?delete=<?php echo $data['id'];
?>">Delete</a></td>

</tr> <?php

$sn++; }

}else{

?> <tr><td colspan="7">No Data Found</td></tr>

<?php

}

?>

</table>

</div>

</body>

</html>