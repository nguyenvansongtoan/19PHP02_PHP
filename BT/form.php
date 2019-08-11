<!DOCTYPE html>
<html>
<head>
	<title>Tiền Điện</title>
</head>
	<style>
		.erro{color:red;}
	</style>
<body>
	<?php 
	$username = $address = $customer_type = $starnumber = $endnumber = $star_date = $end_date ='';
	$errUsername = $errgender = $erraddress = $errcustomer = $errstarnumber = $errendnumber = $errstardate = $errenddate = '';
	// khoi tao gia tri check loi
	//$checkSubmit = true;
		if (isset($_POST ['submit'])) {
			$username = $_POST ['username'];
			$gender = isset($_POST ['gender'])?$_POST['gender']:'';
			$address = $_POST ['address'];
			$customer_type = $_POST ['customer_type'];
			$starnumber = $_POST ['star'];
			$endnumber = $_POST ['end'];
			$star_date = $_POST ['star_date'];
			$end_date = $_POST ['end_date'];
			if ($username == ''){
				$errUsername = 'Please input name';
				//$checkSubmit = false;
			}
			if ($gender == '') {
				$errgender = 'Please input gender';
				//$checkSubmit = false;
			}
			if ($address == '') {
				$erraddress = 'Please input address';
				//$checkSubmit = false;
			}
			if ($customer_type == '') {
				$errcustomer = 'Please input customer_type';
				//$checkSubmit = false;
			}
			if ($starnumber == '') {
				$errstarnumber = 'Please input starnumber';
				//$checkSubmit = false;
			}
			if ($endnumber == '') {
				$errendnumber = 'Please input endnumber';
				//$checkSubmit = false;
			}
			if ($star_date == '') {
				$errstardate = 'Please input star_date';
				//$checkSubmit = false;
			}
			if ($end_date == '') {
				$errenddate = 'Please input end_date';
				//$checkSubmit = false;
			}


		}
	 ?>
	<h1>Tiền điện</h1>
	<form action="" method="POST"></form>
		<p>Ho ten
			<input type="test" name="username">
		</p>
		<p class="erro"><?php echo $errUsername;?></p>
		<p>Gioi tinh
			<input type="radio" name="gender"> Nam
			<input type="radio" name="gender"> Nu
		</p>
		<p class="erro"><?php echo $errgender ?></p>
		<p>Dia chi
			<input type="text" name="address">
		</p>
		<p class="erro"><?php echo $erraddress ?></p>
		<p>Phan loai khach hang
			<select name="customer_type" id="">
				<option value="">Choose customer type</option>
				<option value="1">Su dung dan dung</option>
				<option value="2">Kinh doanh</option>
				<option value="3">San xuat</option>
			</select>
		</p>
		<p class="erro"><?php echo $errcustomer ?></p>
		<p>So dien dau ky
			<input type="text" name="star">
		</p>
		<p class="erro"><?php echo $errstarnumber ?></p>
		<p> So dien cuoi ky
			<input type="text" name="end">
		</p>
		<p class="erro"><?php echo $errendnumber ?></p>
		<p>Ngay dau ky
			<input type="date" name="star_date">
		</p>
		<p class="erro"><?php echo $errstardate ?></p>
		<p>Ngay cuoi ky
			<input type="date" name="end_date">
		</p>
		<p class="erro"><?php echo $errenddate ?></p>
		<p>
			<input type="submit" name="Submit">
		</p>
</body>
</html>