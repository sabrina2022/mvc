<?php
	include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/controle/Controle.Departamento.class.php";
	$dDepartamento = new ControleDepartamento();

	if(isset($_GET['id'])){
		$dDepartamento->excluir($_GET['id']);
	}

	$departamentos = $dDepartamento->listarTodos();
?>
<html lang='pt-br'>
<head>
	<meta charset='utf-8'>
	<title>Agenda de Departamentos</title>
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
		Listagem de Departamentos
	</h1>
	<br>
	<?php
		if($departamentos!=false){
	?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Departamento</th>
	      <th scope="col">Sigla</th>
	      <th scope="col"></th>
				<th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>

	<?php
		foreach($departamentos as $departamento){
			echo "<tr>";
			echo "<th>".$departamento->getId()."</td>";
			echo "<th>".$departamento->getDepartamento()."</td>";
			echo "<td>".$departamento->getSigla()."</td>";
			echo "<td> <a class=\"btn btn-danger btn-sm\" href='lstDepartamento.php?id=".$departamento->getId()."'>Excluir</a></td>";
			echo "<td> <a class=\"btn btn-success btn-sm\" href='editDepartamento.php?id=".$departamento->getId()."'>Editar</a></td>";
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
