<?php 
	//
	// require_once 'test_include.php';
	// require_once 'test_include.php';
	// require_once 'test_include.php';

	// include, include_once, require, require_once
	require_once 'connect.php';
	$sql = "SELECT * FROM users";
	$listUser = mysqli_query($connect, $sql);
	?>
	<table>
		<tr>
			<td>Name</td>
			<td>Address</td>
			<td>Start date</td>
			<td>End date</td>
			<td>Start number</td>
			<td>End number</td>
			<td>Action</td>
		</tr>
	
<?php
	while ($user = $listUser->fetch_assoc()) {
		$id = $user['id'];
?>
	<tr>
		<td><?php echo $user['name']?></td>
		<td><?php echo $user['address']?></td>
		<td><?php echo $user['start_date']?></td>
		<td><?php echo $user['end_date']?></td>
		<td><?php echo $user['start_number']?></td>
		<td><?php echo $user['end_number']?></td>
		<td>
			<a href="#">Edit</a> | <a href="delete_user.php?id=<?php echo $id?>">Delete</a>
		</td>
	</tr>

<?php
	}
?>
</table>
<a href="form.php">Add user</a>