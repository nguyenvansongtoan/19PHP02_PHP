<?php 
	include 'model/model.php';
	class Controller {
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					# code...
					break;
				case 'news':
					# code...
					// lay tin tuc ra
					$model = new Model();
					$newsList = $model->getListNews();
				
					// goi view do tin tuc ra
					include 'view/news/list_news.php';
					break;
				case 'product':
					# code...
					// lay product ra
					$model = new Model();
					$productList = $model->getListProduct();
				
					// goi view do product ra
					include 'view/product/list_product.php';
					break;
				case 'product_detail':
					# code...
					// lay product ra
					$idProduct = $_GET['id_product'];
					$model = new Model();
					$productDetail = $model->getProductDetail($idProduct);
				
					// goi view do product ra
					include 'view/product/product_detail.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>