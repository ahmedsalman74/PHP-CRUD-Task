<?php 
	// First of all we have to check if the form is submitted via the POST
	
    
if(isset($_POST['save']))
{	 
	 $Name = $_POST['fname'];
	 $Email = $_POST['email'];
	 $Password = $_POST['password'];
	 $Image = $_POST['image'];



     $db="mysql:host=localhost;dbname=iti_summer_g2";
     $con = new PDO($db,'root','');
     $query = $sql = "INSERT INTO `users` (`name`, `email`, `password`, `image`)
	 VALUES ('$Name','$Email','$Password','$Image')";
     $sql = $con->prepare($query);
     $result = $sql->execute();
     $user = $sql->fetch(PDO::FETCH_ASSOC);

    
}

