<?php 
	$trata=$_POST["trata"];
	$clien=$_POST["clien"];
	$desc=$_POST["desc"];
	$can=$_POST["can"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("registro",$db);
	mysql_query("insert into informacion values('$trata','$clien','$desc','$can')");
?>

<html>
<head>
	<title> Cliente Guardado </title>
	<link rel="stylesheet" type="text/css" href="ESTILOS/bootstrap.css">
</head>						
<body>
		<div class="container">
		<div class="row">
		<div class="col-md-12">
				<nav class="navbar navbar-inverse">
				      <div class="container-fluid">
				    				<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				     	 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				      				 	<span class="sr-only">Toggle navigation</span>
				        				<span class="icon-bar"></span>
				        				<span class="icon-bar"></span>
				        				<span class="icon-bar"></span>
				      	</button>
				      				<a class="navbar-brand" href="index.html">INICIO</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="Registro.html">Registro<span class="sr-only">(current)</span></a></li>
				        <li><a href="clientes.html">Clientes</a></li> 
				      </ul>
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="button" class="btn btn-info"> Buscar </button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="index.html">ATRAS</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OPCIONES <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				          	<li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
		</div>
		<div class="col-md-6">
			<h1> Registro Guardado </h1>
			<div class="well">
			<p>Su registro a sido grabado satisfactoriamente.</p>
			</div>
		</div>
		<div class="col-md-6">
			<img src="logo.png" class="img-responsive" alt="responsive image">
		</div>
		
</body>
</html>