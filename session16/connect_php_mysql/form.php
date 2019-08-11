<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php
		// Ket noi database
		require_once 'connect.php';
		// Khoi tao va gan gia tri mac dinh cac truong
		$name = $gender = $address = $customer_type = $start_date = $end_date 
		= $start_number = $end_number = '';
		// khoi tao thong bao loi cho cac truong
		$errName = $errGender = $errAddress = $errCustomerType = $errStartDate 
		= $errEndDate = $errStartNumber = $errEndNumber = '';
		// khoi tao gia tri check loi
		$checkSubmit = true;

		function CalNoTax($number) {
		  if ($number <= 100) {
				$money = $number*1500;
			}
			if ($number > 100 && $number <= 200) {
				$money = 100*1500 + ($number-100)*2000;
			}
			//ex 220
			if ($number > 200) {
				$money = 100*1500 + ($number-100)*2000 + ($number-200)*3500;
			}

			return $money;
		}
		function Cal($number, $customer_type) {
			$money = 0;
			switch ($customer_type) {
				case '1':
					$money = CalNoTax($number);
					$money = $money*(100 + 10)/100;
					break;
				case '2':
					$money = CalNoTax($number);
					$money = $money*(100 + 12)/100;
					break;
				case '3':
					$money = CalNoTax($number);
					$money = $money*(100 + 15)/100;
					break;
			}
			return number_format($money,0,",",".");;
		}
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$gender = isset($_POST['gender'])?$_POST['gender']:'';
			$address = $_POST['address'];
			$customer_type = $_POST['customer_type'];
			$start_date = $_POST['start_date'];
			$end_date = $_POST['end_date'];
			$start_number = $_POST['start_number'];
			$end_number = $_POST['end_number'];
			if ($name == '') {
				$errName = 'Please input name';
				$checkSubmit = false;
			}
			if ($gender == '') {
				$errGender = 'Please choose gender';
				$checkSubmit = false;
			}
			if ($address == '') {
				$errAddress = 'Please input address';
				$checkSubmit = false;
			}
			if ($customer_type == '') {
				$errCustomerType = 'Please choose customer type';
				$checkSubmit = false;
			}
			if ($start_date == '') {
				$errStartDate = 'Please input start date';
				$checkSubmit = false;
			}
			if ($end_date == '') {
				$errEndDate = 'Please input end date';
				$checkSubmit = false;
			}
			if ($end_date < $start_date) {
				$errStartDate = 'The last day must be bigger than the first day';
				$errEndDate = 'The last day must be bigger than the first day';
				$checkSubmit = false;
			}
			if ($start_number == '') {
				$errStartNumber = 'Please input start number';
				$checkSubmit = false;
			}
			if ($end_number == '') {
				$errEndNumber = 'Please input end number';
				$checkSubmit = false;
			}
			if ($end_number < $start_number) {
				$errStartNumber = 'The last number must be bigger than the first number';
				$errEndNumber = 'The last number must be bigger than the first number';
				$checkSubmit = false;
			}
			if ($checkSubmit) {
				// tinh tien dien
				//echo Cal($end_number - $start_number, $customer_type);
				$start_date = date('Y-m-d', strtotime($start_date));
				$end_date = date('Y-m-d', strtotime($end_date));

				$sql = "INSERT INTO users(name, gender, customer_type, start_date, end_date, address, start_number, end_number) VALUES ('$name', '$gender', $customer_type, '$start_date', '$end_date', '$address', $start_number, $end_number)";

				mysqli_query($connect, $sql);
				// Chuyen trang
				header("Location: list_user.php");
			}
		}
	?>
	<h1>Form</h1>
	<form action="#" method="post">
		<p>Name
			<input type="text" name="name" value="<?php echo $name?>">
		</p>
		<p class="error"><?php echo $errName;?></p>
		<p>Gender
			<input type="radio" name="gender" value="male"
			<?php echo ($gender == 'male')?'checked':''?>
			> Male
			<input type="radio" name="gender" value="female"
			<?php echo ($gender == 'female')?'checked':''?>
			>Female
		</p>
		<p class="error"><?php echo $errGender;?></p>
		<p>Address
			<input type="text" name="address" value="<?php echo $address?>">
		</p>
		<p class="error"><?php echo $errAddress;?></p>
		<p>Customer type
			<select name="customer_type">
				<option value="">Choose customer type</option>
				<option value="1"
				<?php echo ($customer_type == '1')?'selected':''?>
				>Dân dụng</option>
				<option value="2"
				<?php echo ($customer_type == '2')?'selected':''?>
				>Kinh doanh</option>
				<option value="3"
				<?php echo ($customer_type == '3')?'selected':''?>
				>Sản xuất</option>
			</select>
		</p>
		<p class="error"><?php echo $errCustomerType;?></p>
		<p>Start date
			<input type="date" name="start_date" value="<?php echo $start_date?>">
		</p>
		<p class="error"><?php echo $errStartDate; ?></p>
		<p>End date
			<input type="date" name="end_date" value="<?php echo $end_date?>">
		</p>
		<p class="error"><?php echo $errEndDate;?></p>
		<p>Start number
			<input type="text" name="start_number" value="<?php echo $start_number?>">
		</p>
		<p class="error"><?php echo $errStartNumber ;?></p>
		<p>End number
			<input type="text" name="end_number" value="<?php echo $end_number?>">
		</p>
		<p class="error"><?php echo $errEndNumber ?></p>
		<p><input type="submit" name="submit" value="Submit"></p>
	</form>
</body>
</html>