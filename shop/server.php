<?php
	session_start();
	$username = '';
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'shop');
	if(isset($_POST['submitsignup'])){
		$username = trim($_POST['username']);
		$_SESSION['username'] = $username;
		$password = trim($_POST['password1']);
		$email = trim($_POST['email']);
		$hash = password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($db , "INSERT INTO users (username , email , password) VALUES ('$username' , '$email' , '$hash')");
		$_SESSION['username'] = $username;
		$connected = 1;
		header("location:action_login.php");
	}
	if(isset($_POST['submitlogin'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$_SESSION['username'] = $username;
		$sql = "SELECT * FROM users WHERE username='$username'";
		$query = mysqli_query($db, $sql);
		$numRows = mysqli_num_rows($query);
		
		if($numRows == 1)
		{
			$row = mysqli_fetch_assoc($query);
			if($row['id'] != 1){
				if(password_verify($password,$row['password'])){
					$connected = 1;
					$_SESSION['username'] = $username;
					header("location:action_login.php");
				}
				else
				{
					echo '<script> alert("Parola gresita!") </script>';
				}
			}
			else
				echo '<script> alert("Nu ai permisiunea!") </script>';
		}
		else
			echo '<script> alert("Username gresit!") </script>';
			
			
		
	}
	if(isset($_POST['loginadmin'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = '-';
		$_SESSION['username'] = $username;
		$sql = "SELECT * FROM users WHERE username='$username' AND id='1'";
		$query = mysqli_query($db, $sql);
		$numRows = mysqli_num_rows($query);
		
		if($numRows == 1)
		{
			$row = mysqli_fetch_assoc($query);
			if(password_verify($password,$row['password'])){
				$connected = 1;
				$_SESSION['username'] = $username;
				header("location:admin_panel.php");
			}
			else
			{
				echo '<script> alert("Parola gresita!") </script>';
			}
		}
		else
			echo '<script> alert("Username gresit!") </script>';
		
	}
	if(isset($_POST['adminAdauga'])){
		$name = $_POST['name'];
		$pret = $_POST['pret'];
		$image = $_POST['image'];
		$tip = $_POST['tip'];
		$dbs = $_POST['db'];
		if($name && $pret && $image){
			if($dbs == 0)
				mysqli_query($db , "INSERT INTO men (name , image , pret, tip) VALUES ('$name' , '$image' , '$pret', '$tip')");
			else
				mysqli_query($db , "INSERT INTO women (name , image , pret, tip) VALUES ('$name' , '$image' , '$pret', '$tip')");
			
			echo '<script> alert("Adaugare cu succes!") </script>';
		}
		else
			echo '<script> alert("Numele, pretul si imaginea trebuie completate!") </script>';
		
	}
	if(isset($_POST['adminSterge'])){
		$id = $_POST['id'];
		$dbs = $_POST['db'];
		if($id){
			if($dbs == 0)
				mysqli_query($db , "DELETE FROM men WHERE id = '$id'");
			else
				mysqli_query($db , "DELETE FROM women WHERE id = '$id'");
			echo '<script> alert("Stergere cu succes!") </script>';
		}
		else
			echo '<script> alert("Id-ul trebuie completat!") </script>';
		
	}
	if(isset($_POST['adminEdit'])){
		$id = $_POST['id'];
		$dbs = $_POST['db'];
		$name = $_POST['name'];
		$pret = $_POST['pret'];
		$image = $_POST['image'];
		$tip = $_POST['tip'];
		if($id){
			if($dbs == 0)
				mysqli_query($db , "UPDATE men SET name='$name', image='$image', pret='$pret', tip='$tip' WHERE id='$id'");
			else
				mysqli_query($db , "UPDATE women SET name='$name', image='$image', pret='$pret', tip='$tip' WHERE id='$id'");
			echo '<script> alert("Editare cu succes!") </script>';
		}
		else
			echo '<script> alert("Id-ul trebuie completat!") </script>';
		
	}
	if(isset($_GET['logout'])){
		$connected = 0;
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}
	if(isset($_GET['logout_admin'])){
		$connected = 0;
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}

?>