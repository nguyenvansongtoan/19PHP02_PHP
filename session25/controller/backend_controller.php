<?php 
	include 'model/backend_model.php';
	include 'libs/function.php';
  class BackendController {
  	function handleRequest(){
			// Khoi tao model dung chung
			$backModel = new BackendModel();
			// khoi tao Lib dung chung
			$libs = new LibCommon();

			$controller = isset($_GET['controller'])?$_GET['controller']:'dashboard';
			$action = isset($_GET['action'])?$_GET['action']:'home';

			switch ($controller) {
				case 'dashboard':
					$this->handleFront($action, $backModel, $libs);
					break;
				case 'news':
					$this->handleNews($action, $backModel, $libs);
					break;
				case 'products':
					$this->handleProduct($action, $backModel, $libs);
					break;
				case 'users':
					$this->handleUsers($action, $backModel, $libs);
					break;
				default:
					# code...
					break;
			}
		}

		function handleFront($action, $backModel, $libs) {
		}
		function handleProduct($action, $backModel, $libs) {
			switch ($action) {
				case 'add':
					# code...
					if (isset($_POST['add'])) {
						$name = $_POST['name'];
						$price = $_POST['price'];
						$image = 'default.png';
						if ($_FILES['image']['error'] == 0) {
							$image = $_FILES['image']['name'];
						}
						if ($backModel->add($name, $price, $image) === TRUE) {
							$pathUpload = 'webroot/uploads/products/ ';
							move_uploaded_file($_FILES['image']['tmp_name'], $pathUpload.$image);
							$libs->redirectPage('admin.php?controller=products&action=list_product');
							
						}
					}
					include 'view/products/add.php';
					break;
				case 'list_product':
					$listProduct = $backModel->getProductList();
					include 'view/products/list_product.php';
					# code...
					break;
				default:
					# code...
					break;
			}
		}
  }
?>