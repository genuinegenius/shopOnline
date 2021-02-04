<!DOCTYPE>
<?php include('server.php'); ?>

<html>
	
	<style>
		* {
			margin: 0px; 
			padding: 0px; 
		}
		html{
			width:100%;
			height:100%;
			padding:0;
			margin:0;
		}
		body{
			width:auto;
			height:auto;
			padding-top:15%;
			margin:0;
			overflow:hidden;
		}
		
		::-webkit-scrollbar {
			width: 10px;
		}
		::-webkit-scrollbar-track {
			background: #D3D3D3; 
		}
		::-webkit-scrollbar-thumb {
			background: #808080; 
		}
		::-webkit-scrollbar-thumb:hover {
			background: #707070; 
		}
		form.login{
			background-color:#808080;
			margin:auto;
			min-width:250;
			max-width:300;
			text-align:center;
			padding:2.5% 5% 1% 5%;
			font-size:20;
			border:1px solid #808080;
			border-radius:5px;
		}
		input.submit{
			color:black;
			margin-top:5px;
			padding:5 20 5 20;
			border:1px solid #808080;
			border-radius:5px;
		}
		input.submit:hover{
			cursor:pointer;
			background-color:#D3D3D3;
		}
		label{
			color:white;
			padding:0;
		}
		input.text{
			padding:0;
			margin-bottom:10px;
			padding:2.5px;
		}
		a.create{
			text-decoration:none;
			color:white;
			margin:10px;
			padding:0;
		}
		a.create:hover{
			cursor:pointer;
			color:#D3D3D3;
		}
		div{
			margin-top:10px;
		}
	</style>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="./img/icon-title.ico" />
	</head>
	
	<title> Online shop </title>
	
	<body bgcolor="#D3D3D3">
		<form class="login" method="POST" onSubmit="return checkPassword(this)">
			<label>Username&nbsp;</label>
			<input class="text" type="text" name="username" required></input>
			<label>Password&nbsp;&nbsp;</label>
			<input class="text" type="password" name="password1" id="password1" required></input>
			<label>Password&nbsp;&nbsp;</label>
			<input class="text" type="password" name="password2" id="password2" required></input>
			
			<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input class="text" type="text" name="email" required></input>
			<input class="submit" type="submit" name="submitsignup" value="Signup"></input>
			<div><a class="create" href="login.php">Already have an account</a><div>
		</form>
	</body>
	<script>
	function checkPassword(form) { 
		password1 = form.password1.value; 
		password2 = form.password2.value; 

		// If Not same return False.     
		if (password1 != password2) { 
			alert ("\nParolele nu se potrivesc: încearcă din nou...") 
			return false; 
		} 

		// If same return True. 
		else{ 
			return true; 
		} 
	} 
	</script>

</html>