<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					# code...
					echo "<p>Ban dang o trang home</p>";
					break;
				case 'news':
					# code...
					echo "<p>Ban dang o trang news</p>";
					break;
				case 'product':
					# code...
					echo "<p>Ban dang o trang product</p>";
					break;
				case 'user':
					# code...
					//
					$model = new Model();
					$listUser = $model->getListUser();

					// dang o trang list user
					include 'view/user/list_user.php';
					break;
				case 'add_user':
					# code...
					if (isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$model = new Model();
						if ($model->addUser($username, $password) === TRUE) {
							header("Location: index.php?action=user");
						}	
					}
					include 'view/user/add_user.php';
					break;
				case 'delete_user':
						$id = $_GET['id'];
						$model = new Model();
					  if ($model->deleteUser($id) === TRUE) {
							header("Location: index.php?action=user");
						}	
						# code...
						break;
				case 'edit_user':
						# code...
						$id = $_GET['id'];
						$model = new Model();
						$editUser = $model->getUserById($id);
						$editUser = $editUser->fetch_assoc();
						if (isset($_POST['edit_user'])) {
							$username = $_POST['username'];
							$model = new Model();
							if ($model->editUser($id, $username) === TRUE) {
								header("Location: index.php?action=user");
							}	
						}
						include 'view/user/edit_user.php';
						break;
				default:
					# code...
					break;
			}
		}
	}
?>