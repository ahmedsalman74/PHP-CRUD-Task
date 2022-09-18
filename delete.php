

<?php
$id = $_REQUEST['id'];
$db="mysql:host=localhost;dbname=iti_summer_g2";
$con = new PDO($db,'root','');
$de = "delete from users where id=$id";
$sql = $con->prepare($de);
$result = $sql->execute();
//$user = $sql->fetch(PDO::FETCH_ASSOC);
$users = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<script> 
window.location.replace("dashbord.php");

</script>
