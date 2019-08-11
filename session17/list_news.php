<!DOCTYPE html>
<html>
<head>
	<title>List news</title>
	<style type="text/css">
		img {
			width: 100px;
		}
		td,tr{
			border: 1px solid black;
		}
	</style>
</head>
<body>
<?php 
	require_once 'connect.php';
	$sql = "SELECT * FROM news";
	$listnews = mysqli_query($connect, $sql);
?>
	<table>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Description</td>
			<td>Image</td>
			<td>Created</td>
			<td>Updated</td>
			<td>Action</td>
		</tr>
	
<?php
	while ($news = $listnews->fetch_assoc()) {
		$id = $news['id'];
?>
	<tr>
		<td><?php echo $news['id']?></td>
		<td><?php echo $news['title']?></td>
		<td><?php echo $news['description']?></td>
		<td><img src="uploads/<?php echo $news['image']?>"></td>
		<td><?php echo $news['created']?></td>
		<td><?php echo $news['updated']?></td>
		<td>
			 <a href="edit_news.php?id=<?php echo $id?>">Edit</a> |<a href="delete_news.php?id=<?php echo $id?>">Delete</a>
		</td>
	</tr>

<?php
	}
?>
</table>
<a href="news.php">Add news</a>
</body>
</html>