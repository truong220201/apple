<?php
	include 'config.php';
	if( isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !=''){	
		$username = $_POST["username"];
		$password = $_POST["password"];
		$password = md5($password);
		$sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password' ";
		$user = mysqli_query($conn,$sql);
		if (mysqli_num_rows($user) > 0) {
			header("Location: http://localhost/apple/quan_tri.php");
		}else{
			$message = "Bạn đã nhập sai, mời thử lại";
			echo "<script type='text/javascript' >alert('$message');document.location = 'http://localhost/apple/dndk/dangnhap/dangnhap.php'</script>";
		}
	}
	else{
		header('Location: http://localhost/apple/dndk/dangnhap/dangnhap.php');
	}
?>