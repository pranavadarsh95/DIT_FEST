<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/start.png">
<link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="design2.css">
<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DITFEST Signup</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<style type="text/css">
       body { background-repeat: no-repeat;background-size: cover; }        
   </style>

</head>
<body background="images/festsignup.jpg">
                 		 
 
           	
	<div class="container" style="background-color:Sienna;">
                        <center><h1 style="color:black;background-color:yellow;">DIT FEST</h1></center>
	                 <center><img style="border-radius:15%;"src="images/dit_logo.png" alt="DITFEST" width="40%" height="30%"></center>  		
		<center><h2 style="color:black;">Create a New Account</h2><center>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="text" name="first_name" placeholder="First Name" required="">
				<input type="text" name="last_name" placeholder="Last Name" required="">
				<input type="text" name="college_name" placeholder="College Name" required="">
				<input type="text" name="college_city" placeholder="College City Name" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="text" name="phone" placeholder="Phone Number" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="password" name="confirm_password" placeholder="Confirm Password" required="">
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
				</div>
			</form>
		</div>
	</div>

    <a href="code.php"><h3 style="color:white;background-color:black;"><center>CLICK HERE FOR LOGIN</center></h3></a>
  </body>
  </html>