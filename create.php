<link rel="stylesheet" href="styles.css">
<form method="post" action="create.php">
		Name:<br>
		<input type="text" name="Name">
		<br>
		Email:<br>
		<input type="email" name="Email">
		<br>
		Password:<br>
		<input type="password" name="Password">
		<br>
		Image:<br>
		<input type="text" name="Image">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>

    <?php

    
if(isset($_POST['save']))
{	 
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Password = $_POST['Password'];
	 $Image = $_POST['Image'];



     $db="mysql:host=localhost;dbname=iti_summer_g2";
     $con = new PDO($db,'root','');
     $query = $sql = "INSERT INTO `users` (`name`, `email`, `password`, `image`)
	 VALUES ('$Name','$Email','$Password','$Image')";
     $sql = $con->prepare($query);
     $result = $sql->execute();
     $user = $sql->fetch(PDO::FETCH_ASSOC);

   
	 ?>


<script> alert('New user added successfully '); 
window.location.replace("dashbord.php");

</script>

<?php
}


?>






















