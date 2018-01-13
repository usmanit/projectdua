<?php
	session_start();
	if (isset($_SESSION['login'])){
	include 'koneksi.php';
	echo $nama =isset($_POST['nama']) ? $_POST['nama'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password =isset($_POST['password']) ? $_POST['password']: '';
	if (!empty($nama) && !empty ($email)){
		if(!empty($password)){
			mysqli_query($connect, "
			UPDATE user 
			SET nama = '$nama', email ='$email', $password ='password' WHERE id ='$id'");
		
		
} else {
	mysqli_query($connect, " UPDATE
	user SET 
	nama = '$nama',
	email ='$email'
	WHERE id = '$id'");
}
	header ("location:../user.php");
} else {
	echo "Silahkan lengkapi data href='../user_tambah.php'>user</a>";
}
} else {
	echo "Please <a href='../index.php'>login</a>first.";
}
?>