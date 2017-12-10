<?php
	if(isset($_POST['submit'])){
		$gender=$_POST['gender'];
		
		$to='apostolospalasis@gmail.com'; // Receiver Email ID, apostolospalasis@gmail.com
		$subject='Form Submission';
		$message="gender :".$gender.";
		if(mail($to, $subject, $message,)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>