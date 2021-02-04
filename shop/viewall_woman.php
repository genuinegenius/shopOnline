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
			height:7%;
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
			float:center;
			width:95%;
			height:auto;
			margin-top:5.5%;
			margin-left:2.5%;
			padding:0;
			padding-bottom:10px;
			background-color:#808080;
		}
		
		ul.container1_1{
			position:relative;
			list-style-type: none;
			height:auto;
			width:100%;
			margin:0;
			margin-top:1%;
			padding: 5 0 10 0;
			overflow: hidden;
			background-color: #808080;
		}
		
		p.textinfocont1{
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		p.linkcont1{
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		a.linkcont1{
			text-decoration:none;
			margin:0;
			padding:0;
			width:auto;
			height:auto;
		}
		img.imgcont1{
			display:inline-block;
			width:18.8%;
			height:auto;
			margin:0;
			padding:0;
		}
		a.linkimgcont1{
			text-decoration:none;
			margin:0;
			margin-left:10px;
			padding:0;
			width:auto;
			height:auto;
		}
		
		
		ul.container2_1{
			position:relative;
			list-style-type: none;
			height:auto;
			width:100%;
			margin:0;
			padding: 5 0 10 0;
			overflow: hidden;
			background-color: #808080;
		}
		div.container2{
			float:center;
			width:95%;
			height:auto;
			margin:2.5%;
			padding:0;
			padding-bottom:10px;
			background-color:#808080;
		}
		p.textinfocont2{
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		p.linkcont2{
			margin:10px;
			padding:0;
			color:white;
			font-family:"Lucida Console", Courier, monospace;
		}
		a.linkcont2{
			text-decoration:none;
			margin:0;
			padding:0;
			width:auto;
			height:auto;
		}
		
	</style>

	
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="./img/icon-title.ico" />
	</head>
	
	<title> Online shop </title>

	<body bgcolor="#D3D3D3">
		<div class="container1">
			
			<ul class="container1_1">
				<p class="textinfocont1" title="Bluze">Bluze</p>
			</ul>
			<?php				
				$localhost = "localhost";
				$idbazadedate = "root";
				$parolabazadedate = "";
				$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'shop');
				$sql = "SELECT * FROM women WHERE tip='bluza'";
				$query = mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($query)){
					echo '<a class="linkimgcont1" href="buy.php?id='.$row['id'].'&tip=2" title="Bluze">';
					echo '<img class="imgcont1" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"></img></a>';
				}
			?>
			
			<ul class="container1_1">
				<p class="textinfocont1" title="Cămăși">Cămăși</p>
			</ul>
			<?php				
				$localhost = "localhost";
				$idbazadedate = "root";
				$parolabazadedate = "";
				$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'shop');
				$sql = "SELECT * FROM women WHERE tip='camasa'";
				$query = mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($query)){
					echo '<a class="linkimgcont1" href="buy.php?id='.$row['id'].'&tip=2" title="Cămăși">';
					echo '<img class="imgcont1" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"></img></a>';
				}
			?>
			
			<ul class="container1_1">
				<p class="textinfocont1" title="Încălțăminte">Încălțăminte</p>
			</ul>
			<?php				
				$localhost = "localhost";
				$idbazadedate = "root";
				$parolabazadedate = "";
				$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'shop');
				$sql = "SELECT * FROM women WHERE tip='incaltaminte'";
				$query = mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($query)){
					echo '<a class="linkimgcont1" href="buy.php?id='.$row['id'].'&tip=2" title="Încălțăminte">';
					echo '<img class="imgcont1" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"></img></a>';
				}
			?>
			
			<ul class="container1_1">
				<p class="textinfocont1" title="Jeans">Jeans</p>
			</ul>
			<?php				
				$localhost = "localhost";
				$idbazadedate = "root";
				$parolabazadedate = "";
				$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'shop');
				$sql = "SELECT * FROM women WHERE tip='jeans'";
				$query = mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($query)){
					echo '<a class="linkimgcont1" href="buy.php?id='.$row['id'].'&tip=2" title="Jeans">';
					echo '<img class="imgcont1" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"></img></a>';
				}
			?>
			
			<ul class="container1_1">
				<p class="textinfocont1" title="Pantaloni scurți">Pantaloni scurți</p>
			</ul>
			<?php				
				$localhost = "localhost";
				$idbazadedate = "root";
				$parolabazadedate = "";
				$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'shop');
				$sql = "SELECT * FROM women WHERE tip='pantaloni'";
				$query = mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($query)){
					echo '<a class="linkimgcont1" href="buy.php?id='.$row['id'].'&tip=2" title="Pantaloni scurți">';
					echo '<img class="imgcont1" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"></img></a>';
				}
			?>
			
		</div>
		<div style="width:auto;height:auto;">
			<ul>
				<li class="left iconhome"><a class="home" href="index.php" title="Acasă"><img src="./img/icon-title.ico"></img></a></li>
				<li class="left menu"><a class="home" href="viewall_man.php" title="Bărbați"><p class="home">Bărbați</p></a></li>
				<li class="left menu"><a class="home" href="viewall_man.php" title="Femei"><p class="home">Femei</p></a></li>
				<li class="right cart"><a class="home" href="index.php" title="Cărucior"><img src="./img/12.png"></img></a></li>
				<li class="right login"><a class="home" href="login.php" title="Login"><p class="login">Login</p></a></li>
			</ul>
		</div>
	</body>
</html>