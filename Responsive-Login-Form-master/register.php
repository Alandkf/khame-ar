<!-- <?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $payment_type= $_POST["payment_type"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password','$payment_type')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Animated Sign up Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #payment{width:100% ;}
    </style>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form class="" action="" method="post" autocomplete="off"onsubmit="return validateForm()">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>name</h5>
           		   		<input type="text" name="name" id = "name" required value="" pattern="^[A-Za-z\s]+$" class="input">
           		   </div>
                   
           		</div>
                   <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="text" name="username" id = "username" required value="" pattern="^[A-Za-z0-9_]+$" class="input"> <br>
                    </div>
                 
                 </div>

                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="email" name="email" id = "email" required value="" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" class="input"> <br>
                    </div>
                 
                 </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" id = "password" required value="" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" class="input">
            	   </div>
            	</div>
                <div class="input-div pass" class="input">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Confirm Password</h5>
                         <input type="password" name="confirmpassword" id = "confirmpassword" required value="" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" class="input">
                 </div>
                 

                
              </div>
              
                <label for="payment_type" style="width: 25rem;"><h3>Payment Type:</h3></label>
                <div class="payment" style="display: flex; text-align: center; align-items: center; justify-content: center; gap: 1rem;">
                    <input type="radio" name="payment_type" value="Credit Card" class="pay" checked ><h3>Credit Card</h3> 
                    <input type="radio" name="payment_type" value="Debit Card" class="pay" > <h3>Debit Card</h3>
                     <input type="radio" name="payment_type" value="PayPal" class="pay"><h3>PayPal</h3> 
            	</div>
                <input type="submit" class="btn" value="Sign up">
               <a href="login.html"><input style="text-align: center;" class="btn-s" value="login" style="margin-top: 1.4rem;"></a> 

                
            </form>
            
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>
