<?php

include('update-script.php');

?>

<!DOCTYPE html>

<html>

<head>

<title>PHP CRUD Operations</title>

</head>

<body>

<h2>Update Form</h2>

<p style="color:red">

<?php if(!empty($msg)){echo $msg; }?>

</p>



<form method="post" action="">

<label>Full Name</label>

<input type="text" placeholder="Enter Full Name" name="name" required value="<?php
echo isset($editData) ? $editData['name'] : '' ?>">
<label>Full Name</label>

<input type="text" placeholder="Enter username" name="username" required value="<?php
echo isset($editData) ? $editData['username'] : '' ?>">

<label>Email Address</label>

<input type="email" placeholder="Enter Email Address" name="email_address" required
value="<?php echo isset($editData) ? $editData['email'] : '' ?>">

<label>password</label>
<input type="password" placeholder="Enter password" name="password" required value="<?php echo
isset($editData) ? $editData['password'] : '' ?>">

<button type="submit" name="update">Submit</button>

</form>

</body>

</html>