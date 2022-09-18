<link rel="stylesheet" href="styles.css">
<?php


$id = $_REQUEST['id'];
$db="mysql:host=localhost;dbname=iti_summer_g2";
$con = new PDO($db,'root','');
$query = "SELECT * from users where id = $id";
$sql = $con->prepare($query);
$result = $sql->execute();
$user = $sql->fetch(PDO::FETCH_ASSOC);
?>
<form method="post" action="update.php">
    <input type="text" name="name" value="<?php echo $user['name']?>">
    <input type="email" name="email" value="<?php echo $user['email']?>">
    <input type="text" name="image" value="<?php echo $user['image']?>">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="submit" name="save" value="submit">
</form>


<?php
if(isset($_POST['save']))
{	 
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Image = $_POST['image'];
    $id = $_REQUEST['id'];
     $update= "UPDATE `users` SET `name` = '$Name' ,`email` = '$Email',`image` = '$Image' WHERE `users`.`id` = $id"; 
     $sql = $con->prepare($update);
     $result = $sql->execute();
     $user = $sql->fetch(PDO::FETCH_ASSOC);

?>

<script> 
window.location.replace("dashbord.php");
</script>


<?php  } ?>