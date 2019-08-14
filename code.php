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
    <title>DITFEST Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">


<style type="text/css">
body { background-repeat: no-repeat;background-size: cover; } 
</style>
</head>
<body background="images/pic13.jpg" >
  
  
  
	<div class="container" style="background-color:darkgrey;">
        <?php
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
		?>
        <center><img style="border-radius:15%;"src="images/dit_logo.png" alt="DITFEST" width="40%" height="30%"</center>
	<center><i class="fa fa-user" style="font-size:48px;color:green"></i></center>
        <h2 style="background-color:blue;color:white;">Welcome  <?php echo $userData['first_name']; ?>!</h2>
        <h2><a href="userAccount.php?logoutSubmit=1" class="logout" style="color:brown;background-color:white;">Logout</a></h2>
		<div class="regisFrm">
			<p style="color:white;"><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
			 <p style="color:white;"><b>Email: </b><?php echo $userData['email']; ?></p>
			  <p style="color:white;"><b>College Name: </b><h3 style="color:black;"><?php echo $userData['college_name'].','.$userData['college_city']; ?></h3></p>
            <p style="color:white;"><b>Phone: </b><?php echo $userData['phone']; ?></p>
           <h2 style="color:black;background-color:green;">Thanks! <?php echo $userData['first_name']; ?> for login now you can register for any events accordingly! </h2>
		<a href="workunder.html"><h3 style="color:black;background-color:orange;margin-top:5%;"><center>REGISTER ACCORDING TO EVENTS </center></h3></a>
		</div>
        <?php }else{ ?>
                 <center><h1 style="color:black;background-color:yellow;">DIT FEST</h1></center>
	         <center><img style="border-radius:15%;"src="images/dit_logo.png" alt="DITFEST" width="40%" height="30%"></center>

		<center><h2 style="color:black;">Login to Your Account</h2></center>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="LOGIN">
				</div>
			</form>
            <p style="color:black;">Don't have an account? <a href="registration.php" style="color:blue;">Register</a></p>
		</div>
        <?php } ?>
	</div>
 <a href="ditfest.html"><h3 style="color:white;background-color:black;"><center>BACK TO  HOME </center>     </h3></a> 
 
       
     
  </body>
  </html>