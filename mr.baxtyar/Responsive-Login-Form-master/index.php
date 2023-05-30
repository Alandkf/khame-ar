<!-- <?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1{
            font-size: 7rem;
            color: green;
            position: absolute;
            left: 60rem; top: 15rem;
         }
         input{
            width: 300px !important;
            display: inline-block;
            text-align: center;
            position: absolute;
            left: 70rem; top: 30rem;
        }
    </style>
</head>
<body>
    <div class="welcome">
    <h1>Welcome <?php echo $row["name"]; ?> </h1>
    <a href="logout.php"><input type="" class="btn-s" value="Logout" style="margin-top: 1.4rem;"></a>
</div>
    <img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		</div>
</body>
</html>
