<h2>Add user page</h2>
<form action="index.php?action=edit_user&id=<?php echo $id?>" method="POST">
	<p>
		Username
		<input type="text" name="username" value="<?php echo $editUser['username']?>">
	</p>
	<input type="submit" name="edit_user" value="Edit user">
</form>