<?php
	include 'config.php';
	if( isset($_POST['submit']) && $_POST["username"]!= '' && $_POST["password"]!='' && $_POST["repassword"]!=''){
		//Thực hiện xử lý
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$level = 0;
		if ($password != $repassword) {
			$messageb = "Mật khẩu và mật khẩu nhập lại không khớp, xin thử lại!";
			echo "<script type='text/javascript' >alert('$messageb');document.location = 'http://localhost/apple/dndk/dangki/dangki.php'</script>";
		}
		$sql = "SELECT * FROM user WHERE username = '$username'";
		$old = mysqli_query($conn,$sql);
		$password = md5($password);

		if(mysqli_num_rows($old) > 0){
			header("location:dangki.php");
		}
		$sql = "INSERT INTO user(username,password,level) VALUES ('$username','$password','$level')";
		mysqli_query($conn,$sql);
		$message = "Đăng kí thành công!";
			echo "<script type='text/javascript' >alert('$message');document.location = 'http://localhost/apple/dndk/dangnhap/dangnhap.php'</script>";
	}
	else{
		$messagea = "Không được để trống thông tin!";
			echo "<script type='text/javascript' >alert('$messagea');document.location = 'http://localhost/apple/dndk/dangki/dangki.php'</script>";
	}
?>