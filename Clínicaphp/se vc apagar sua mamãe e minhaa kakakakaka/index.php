<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Controle Clínico</title>
	<link rel="icon" href="images/icon2.png" type"images/png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<style>

{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
}

.navbar {
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 1rem 2rem;
}

.navbar-brand {
    font-size: 1.6rem;
    font-weight: bold;
    color: #2b8d8d;
    text-transform: uppercase;
}

.navbar-nav .nav-link {
    color: #333;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    transition: color 0.3s, background-color 0.3s;
    border-radius: 4px;
}

.navbar-nav .nav-link:hover {
    color: #ffffff;
    background-color: #2b8d8d;
}

.navbar-nav .dropdown-menu {
    background-color: #ffffff;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.dropdown-item {
    color: #333;
    transition: color 0.3s, background-color 0.3s;
}

.dropdown-item:hover {
    color: #ffffff;
    background-color: #2b8d8d;
}

.form-control {
    border-radius: 20px;
    border: 1px solid #2b8d8d;
    padding: 0.5rem 1rem;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #226e6e;
    box-shadow: 0 0 5px rgba(34, 110, 110, 0.5);
}

.btn-outline-info {
    color: #2b8d8d;
    border: 1px solid #2b8d8d;
    border-radius: 20px;
    padding: 0.5rem 1rem;
    transition: color 0.3s, background-color 0.3s, border-color 0.3s;
}

.btn-outline-info:hover {
    background-color: #2b8d8d;
    color: #ffffff;
    border-color: #2b8d8d;
}

.navbar-toggler {
    border: none;
    color: #2b8d8d;
}

.navbar-toggler:focus {
    outline: none;
    box-shadow: none;
}

</style>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  	<div class="container-fluid">
	    	<a class="navbar-brand" href="#">SCC</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Médicos
	          </a>
	        <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
	        </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pacientes
	          </a>
	        <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
	        </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultas
	          </a>
	        <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
	        </ul>
	        </li>
	      	</ul>
	      	<form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
		        <button class="btn btn-outline-info" type="submit">Procurar</button>
	      	</form>
		</div>
		</div>
	</nav>

	  <div class="container">
	  	<div class="row mt-5">
	  		<div class="col">
	  			<?php
	  			// conexão com a base de dados
	  				include('config.php');

	  				switch (@$_REQUEST['page']) {
	  					case 'cadastrar-medico':
	  						include('cadastrar-medico.php');
	  						break;
	  					case 'editar-medico':
	  						include('editar-medico.php');
	  						break;
	  					case 'listar-medico':
	  						include('listar-medico.php');
	  						break;
	  					case 'salvar-medico':
	  						include('salvar-medico.php');
	  						break;

	  						case 'cadastrar-paciente':
	  						include('cadastrar-paciente.php');
	  						break;
	  					case 'editar-paciente':
	  						include('editar-paciente.php');
	  						break;
	  					case 'listar-paciente':
	  						include('listar-paciente.php');
	  						break;
	  					case 'salvar-paciente':
	  						include('salvar-paciente.php');
	  						break;

	  						case 'cadastrar-consulta':
	  						include('cadastrar-consulta.php');
	  						break;
	  					case 'editar-consulta':
	  						include('editar-consulta.php');
	  						break;
	  					case 'listar-consulta':
	  						include('listar-consulta.php');
	  						break;
	  					case 'salvar-consulta':
	  						include('salvar-consulta.php');
	  						break;
	  					default:
	  						include('home.php');
	  				}
	  			?>
	  		</div>
	  	</div>
	  </div>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>