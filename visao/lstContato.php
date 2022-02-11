<?php
	include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/controle/Controle.Contato.class.php";
	$cContato = new ControleContato();

	if(isset($_GET['id'])){
		$cContato->excluir($_GET['id']);
	}

	$contatos = $cContato->listarTodos();
?>
<html lang='pt-br'>
<head>
	<meta charset='utf-8'>
	<title>Agenda de Contatos</title>
	<!-- bootstrap - css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- fork awesome - fontes -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
	<!-- css personalizado -->
	<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<div class="container">
	<h1>
		Listagem de Contatos
	</h1>
	<br>
	<?php
		if($contatos!=false){
	?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nome</th>
	      <th scope="col">Telefone</th>
		  <th scope="col">Departamento</th>
	      <th scope="col"></th>
				<th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>

	<?php
		foreach($contatos as $contato){
			echo "<tr>";
			echo "<th>".$contato->getId()."</td>";
			echo "<th>".$contato->getNome()."</td>";
			echo "<td>".$contato->getNumero()."</td>";
			echo "<td>".$contato->getDepartamento_id()."</td>";
			echo "<td> <a class=\"btn btn-danger btn-sm\" href='lstContato.php?id=".$contato->getId()."'>Excluir</a></td>";
			echo "<td> <a class=\"btn btn-success btn-sm\" href='editContato.php?id=".$contato->getId()."'>Editar</a></td>";
			echo "</tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}
	?>
	<br>
	<a class="btn btn-warning btn-sm" href='../index.php'>Voltar</a>
</div>
</body>
</html>
