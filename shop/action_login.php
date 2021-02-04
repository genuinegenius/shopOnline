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
			margin-top:5%;
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
			margin-top: 5%;
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
		
	</style>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="./img/icon-title.ico" />
	</head>
	
	<title> Online shop </title>

	<body bgcolor="#D3D3D3">
		
		<div class="container1">
			<ul class="container1_1">
				<li class="left"><p class="textinfocont1" title="Bărbați">Bărbați</p></li>
				<li class="right"><a class="linkcont1" href="viewall_man.php" title="View all"><p class="linkcont1">View all</p></a></li>
			</ul>
				<a class="linkimgcont1" href="viewall_man.php" title="Tricouri"><img class="imgcont1" src="./barbati_img/tricoumain.jpg"></img></a>
				<a class="linkimgcont1" href="viewall_man.php" title="Pantaloni scurți"><img class="imgcont1" src="./barbati_img/pantaloniscurtimain.jpg"></img></a>
				<a class="linkimgcont1" href="viewall_man.php" title="Cămăși"><img class="imgcont1" src="./barbati_img/camasamain.jpg"></img></a>
				<a class="linkimgcont1" href="viewall_man.php" title="Încălțăminte"><img class="imgcont1" src="./barbati_img/incaltamintemain.jpg"></img></a>
				<a class="linkimgcont1" href="viewall_man.php" title="Jeans"><img class="imgcont1" src="./barbati_img/jeansmain.jpg"></img></a>
		</div>
		
		<div class="container2">
			<ul class="container2_1">
				<li class="left"><p class="textinfocont2" title="Femei">Femei</p>
				<li class="right"><a class="linkcont2" href="viewall_woman.php" title="View all"><p class="linkcont2">View all</p></a>
			</ul>
			<a class="linkimgcont1" href="viewall_woman.php" title="Bluze"><img class="imgcont1" src="./femei_img/bluzamain.jpg"></img></a>
			<a class="linkimgcont1" href="viewall_woman.php" title="Pantaloni scurți"><img class="imgcont1" src="./femei_img/pantaloniscurtimain.jpg"></img></a>
			<a class="linkimgcont1" href="viewall_woman.php" title="Cămăși"><img class="imgcont1" src="./femei_img/camasamain.jpg"></img></a>
			<a class="linkimgcont1" href="viewall_woman.php" title="Încălțăminte"><img class="imgcont1" src="./femei_img/incaltamintemain.jpg"></img></a>
			<a class="linkimgcont1" href="viewall_woman.php" title="Jeans"><img class="imgcont1" src="./femei_img/jeansmain.jpg"></img></a>
		</div>
		<div style="width:auto;height:auto;">
			<ul>
				<li class="left iconhome"><a class="home" href="index.php" title="Acasă"><img src="./img/icon-title.ico"></img></a></li>
				<li class="left menu"><a class="home" href="viewall_man.php" title="Bărbați"><p class="home">Bărbați</p></a></li>
				<li class="left menu"><a class="home" href="viewall_woman.php" title="Femei"><p class="home">Femei</p></a></li>
				<li class="right cart"><a class="home" href="index.php" title="Cărucior"><img src="./img/12.png"></img></a></li>
				<?php 
					echo '<li class="right login"><a class="home" href="index.php?logout='. '1' . '" title="Logout"><p class="login">logout</p></a></li>';
					echo '<li class="right login"><p class="login">'. $_SESSION['username'] .'</p></li>';
				?>
			</ul>
		</div>
	</body>


</html>