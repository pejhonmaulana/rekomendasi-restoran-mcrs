<?php
	session_start();
	include "koneksi.php";
	if(isset($_POST["submit"])){
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$TL = $_POST["TL"];
		$jk = $_POST["jk"];
		$alamat = $_POST["alamat"];
		$password = $_POST["password"];
		$konfirmasipassword = $_POST["konfirmasi-password"];

		$sql = "SELECT * FROM tb_user WHERE nama='$nama' AND pass='$ps'";
		$query = mysqli_query($sql) or die (mysqli_error());

		if(mysqli_num_rows($query) > 0){
			$data = mysqli_fetch_array($query);

			$_SESSION["sesiku"] = $data["nama"];
			$_SESSION["psesiku"] = $data["pass"];

			header("location: index.php");
		} elseif($ps != $ps2){
			echo "password tidak sama";
		} else {
			echo "Gagal";
		}
	}
?>