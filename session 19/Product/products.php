<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
	<h1>News</h1>
	<?php 
		$title = $description = $image = $created = '';
		include 'connect.php';
		if (isset($_POST['submit'])) {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$image = '';
			// upload image
		if ($_FILES['image']['error'] == 0) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
		}
		$sql = "INSERT INTO news( title, description,image) VALUES ('$title', '$description', '$image')";
		//var_dump($sql); exit;
				//mysqli_query($connect, $sql);
				//header("Location: list_news.php");
		if (mysqli_query($connect, $sql) === TRUE){
			header('Location: list_news.php');
		}
	}			
 ?>
	<form action="" method="POST" enctype="multipart/form-data">
		<p>Title
			<input type="text" name="title" value="<?php echo $title;?>">
		</p>
		<p>Description	
			<input type="text" name="description" value="<?php echo $description;?>">
		</p>
		<p>Image
			<input type="file" name="image" value="<?php echo $image;?>">
		</p>
		<p><input type="submit" name="submit" value="ADD"></p>
	</form>
</body>
</html>