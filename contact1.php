<?php  
session_start();
    require("includes/connection.php");
     

    if(!isset($_SESSION['username'])){
        header("location: login.php");
        die();
    }
    
?>





<?php

include 'includes/connection.php';
$success=0;
$failed=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'connection.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
     $phone=$_POST['phone'];
     $message=$_POST['message'];

$query="insert into contact(name,email,phone,message) values('$name','$email','$phone','$message')";

mysqli_query($conn,$query);
$result=mysqli_query($conn, $query);
if($result){
	echo 'Your response has been received successfully';
}
else
{
	echo 'Some went wring check your response';
	header('location:contact1.php');
}


}

?>



<?php include_once('includes/header.php');?>
<body>
	<main>
		

    <div class="container">
    	<table class="assistant" border="20px" >
		<section>
			<h2>Send a message</h2>
			<form class="form-group" action="#"  method="POST">
				<tr>
				<td><label for="name">Name:</label>
				<input type="text" id="name" name="name" required></td>
				<td><label for="email">Email:</label>
				<input type="email" id="email" name="email" required></td>
				<td><label for="phone">Phone:</label>
				<input type="tel" id="phone" name="phone" required></td>
				<td><label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea></td>
				<td><button type="submit">Send</button></td>
			</tr>
				
			</form>
		</section>
	</table>
	</div>
		</section>
		<section>
			<h2>Location</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.767662165459!2d-73.98584168455116!3d40.74831497932865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259b3ec7f74bf%3A0xb1f9c5fa5b5a5a6f!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1646826118547!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</section>
	</main>
</body>
	<?php include_once('includes/footer.php');?>
    











