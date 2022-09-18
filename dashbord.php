<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">

	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->
	<link rel="stylesheet" href="styeeel.css">
	<title>Start up</title>


</head>

<body>

	<?php
	$db = "mysql:host=localhost;dbname=iti_summer_g2";
	$con = new PDO($db, 'root', '');
	$query = "SELECT * from users";
	$sql = $con->prepare($query);
	$result = $sql->execute();
	$users = $sql->fetchAll(PDO::FETCH_ASSOC);



	?>
	<h2>Display people data in an html table</h2>

	<form action="create.php" id="add">
		<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
		<button type=submit>Add new</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>name</th>
				<th>email</th>
				<th>image</th>
				<th>created_at</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user) : ?>
				<tr>
					<td><?php echo $user['name'] ?></td>
					<td><?php echo $user['email'] ?></td>
					<td><?php echo $user['image'] ?></td>
					<td><?php echo $user['created_at'] ?></td>
					<td>
						<form action="update.php">
							<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
							<button type=submit>update</button>
						</form>
						<form action="delete.php">
							<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
							<button type=submit>Delete</button>
						</form>


					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</body>

</html>