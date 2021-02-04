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
		form.adauga{
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
		div.adauga{
			background-color:#808080;
			margin:auto;
			min-width:250;
			max-width:300;
			text-align:center;
			padding:0;
			font-size:20;
			border:0px solid #808080;
			border-radius:5px;
		}
		div.info{
			background-color:#808080;
			margin:auto;
			min-width:250;
			max-width:300;
			text-align:center;
			padding:0;
			padding-top:10;
			padding-bottom:10;
			font-size:20;
			border:0px solid #808080;
			border-radius:5px;
			margin-bottom:10;
		}
		a.menu{
			text-decoration:none;
			color:white;
			margin:0;
			padding:5;
		}
		a.menu:hover{
			cursor:pointer;
		}
		a.menu_checked{
			text-decoration:none;
			color:#808080;
			background-color:#d3d3d3;
			border-bottom:0px solid #d3d3d3;
			border-bottom-left-radius:5px;
			border-bottom-right-radius:5px;
			margin:0;
			padding:5;
			padding-top:0;
		}
		p.info{
			font-size:20;
			color:white;
			margin:0;
			padding:0;
		}
		label{
			color:white;
			padding:0;
		}
		input.text{
			width:auto;
			height:auto;
			min-width:70%;
			min-height:25;
			padding:0;
			margin:0;
			margin-top:20;
			margin-bottom:10;
			padding:2.5px;
			border:0px solid;
			border-radius:5px;
		}
		input.submit{
			color:black;
			margin:0;
			padding:0;
			margin-top:5px;
			margin-bottom:10px;
			padding:5 20 5 20;
			border:1px solid #808080;
			border-radius:5px;
		}
		input.submit:hover{
			cursor:pointer;
			background-color:#D3D3D3;
		}
		select.tip{
			width:auto;
			height:auto;
			min-width:70%;
			min-height:25;
			margin:0;
			padding:0;
			margin-top:10;
			margin-bottom:10;
			border:0px solid;
			border-radius:5px;
			padding-left:5;
		}
		select.tip:hover{
			cursor:pointer
		}
		option{
			font-size:15px;
		}
	</style>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="./img/icon-title.ico" />
	</head>
	
	<title> Online shop </title>
	
	<body bgcolor="#D3D3D3">
		<div class="info">
			<p class="info">Administrator: <?php echo $_SESSION['username']; ?></p>
		</div>
		<div class="adauga">
			<a class="menu" href="admin_panel.php">Adauga</a>
			<a class="menu_checked" href="admin_panel_sterge.php">Sterge</a>
			<a class="menu" href="admin_panel_edit.php">Editeaza</a>
			<a class="menu" href="admin_panel.php?logout_admin=1" title="Logout">Logout</a>
			<form class="adauga" method="POST">
				<label>ID&nbsp;&nbsp;&nbsp;</label>
				<input class="text" type="text" name="id" title="ID"></input>
				<label>DB&nbsp;&nbsp;</label>
				<select class="tip" name="db" title="DB">
					<option value="0">Men</option>
					<option value="1">Women</option>
				</select>
				<input class="submit" type="submit" name="adminSterge" value="Sterge"></input>
			</form>
		</div>
	</body>
</html>