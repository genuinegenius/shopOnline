<!DOCTYPE html>
<?php include('server.php'); ?>
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
			width:100%;
			height:100%;
			padding:0;
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
		
		ul {
			position:fixed;
			top:0;
			list-style-type: none;
			height:8%;
			width:100%;
			margin: 0;
			padding: 5 5 5 0;
			overflow: hidden;
			background-color: #808080;
		}
		li.left{
			margin:0;
			padding:0;
			list-style-type: none;
		    overflow: hidden;
			float:left;
		}
		li.right{
			margin:0;
			padding:0;
			list-style-type: none;
		    overflow: hidden;
			float:right;
		}
		li a.home{	
			display: block;
			color: white;
			text-align: center;
			padding: 0;
			text-decoration: none;
		}
		li.iconhome{
			margin-left:2.5%;
		}
		li.menu{
			margin-left:2%;
			margin-top:1.5%;
		}
		li.cart{
			margin-right:3%;
			margin-top:0.75%;
		}
		li.login{
			margin-right:2%;
			margin-top:1.5%;
		}
		p.home{
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		p.login{
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		
		div.container1{
			width:95%;
			height:10%;
			margin-top:5%;
			margin-left:2.5%;
			padding:0;
			padding-bottom:10px;
			background-color:#808080;
		}
		div.divpret{
			float:right;
			width:40%;
			height:auto;
			margin:2.5%;
			margin-top:5%;
			padding:1%;
			background-color:#808080;
		}
		div.divimg{
			float:left;
			width:40%;
			height:auto;
			margin:2.5%;
			margin-top:5%;
			padding:1%;
			background-color:#808080;
		}
		p.textinfocont1{
			display:inline-block;
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		p.linkcont1{
			display:inline-block;
			margin:0;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		a.linkcont1{
			text-decoration:none;
			margin:0;
			margin-left:86%;
			padding:0;
			width:auto;
			height:auto;
		}
		img.imgcont1{
			display:inline-block;
			width:46%;
			heght:100%;
			margin:10px;
			padding:0;
		}
		p.pret{
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		p.img{
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
	</style>
	
	<head> 
		<link rel="shortcut icon" href="./img/icon-title.ico" />
	</head>
	
	<title> Online shop </title>
	
	<body bgcolor="#D3D3D3">
		
		<?php
			$tip = $_GET['tip'];
			$id  = $_GET['id'];
			
			if($tip == 1){
				$sql = "SELECT * FROM men WHERE id='$id'";
				$result = mysqli_query($db, $sql);
				$row = mysqli_fetch_assoc($result);
				$numRows = mysqli_num_rows($result);
				$name = $row['name'];
				$pret = $row['pret'] - '0.01';
				$image = base64_encode($row['image']);
				if($numRows == 1){
					echo '<div class="divimg">';
						echo '<p class="img" style="color:white"> '. $name.'</p>';
						echo '<img src="data:image/jpeg;base64,';
						echo $image. '"> </img>';
					echo '</div>';
					echo '<div class="divpret">';
						echo '<p class="pret" title="Preț">Preț: '. $pret .' lei</p>';
					echo '</div>';
				}
			}
			else{
				if($tip == 2){
					$sql = "SELECT * FROM women WHERE id='$id'";
					$result = mysqli_query($db, $sql);
					$row = mysqli_fetch_assoc($result);
					$numRows = mysqli_num_rows($result);
					$name = $row['name'];
					$pret = $row['pret'] - '0.01';
					$image = base64_encode($row['image']);
					if($numRows == 1){
						echo '<div class="divimg">';
							echo '<p class="img" style="color:white"> '. $name.'</p>';
							echo '<img src="data:image/jpeg;base64,';
							echo $image. '"> </img>';
						echo '</div>';
						echo '<div class="divpret">';
							echo '<p class="pret" title="Preț">Preț: '. $pret .' lei</p>';
						echo '</div>';
					}
				}
			}
			
		?>
		
		
		<div style="width:auto;height:auto;">
			<ul>
				<li class="left iconhome"><a class="home" href="index.php" title="Acasă"><img src="./img/icon-title.ico"></img></a></li>
				<li class="left menu"><a class="home" href="viewall_man.php" title="Bărbați"><p class="home">Bărbați</p></a></li>
				<li class="left menu"><a class="home" href="viewall_woman.php" title="Femei"><p class="home">Femei</p></a></li>
				<li class="right cart"><a class="home" href="login.php" title="Cărucior"><img src="./img/12.png"></img></a></li>
				<li class="right login"><a class="home" href="login.php" title="Login"><p class="login">Login</p></a></li>
			</ul>
		</div>
	</body>
	
</html>