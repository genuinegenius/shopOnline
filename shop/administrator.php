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
			padding-top:17.5%;
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
		<form class="login" method="POST">
			<label>Username&nbsp;</label>
			<input class="text" type="text" name="username" required></input>
			<label>Password&nbsp;&nbsp;</label>
			<input class="text" type="password" name="password" required></input>
			<input class="submit" type="submit" name="loginadmin" value="Login"></input>
		</form>
	</body>


</html>