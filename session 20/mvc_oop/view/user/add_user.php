<h2>Add user page</h2>
<form action="index.php?action=add_user" method="POST">
	<p>
		Username
		<input type="text" name="username">
	</p>
	<p>
		Password
		<input type="password" name="password">
	</p>
	<p>
		Avatar
		<input type="file" name="avatar">
	</p>
	<input type="submit" name="add_user" value="Add user">
</form>