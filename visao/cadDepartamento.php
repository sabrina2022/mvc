<?php
	if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
		include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/controle/Controle.Departamento.class.php";
		$cControle = new ControleDepartamento();
		$cControle->inserir($_POST);
	}
?>
<html lang='pt-br'>
<head>
	<meta charset='utf-8'>
	<title>Agenda de Departamento</title>
	<!-- bootstrap - css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- fork awesome - fontes -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
	<!-- css personalizado -->
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

	<div class="container">
		<h1 class="centralizado">Formulário de Inclusão de Departamentos</h1>
		<div class="formulario">
			<form method='post' action='cadDepartamento.php'>
				<!-- departamento -->
				<div class="col-sm-10 mb-3">
					<label for="groupNome" class="form-label">Departamento:</label>
					<input type="text" class="form-control" id="departamento" name="departamento" placeholder="Nome do Departamento" value="">
				</div>
				<!-- sigla -->
				<div class="col-sm-10 mb-3">
					<label for="groupFone" class="form-label">Sigla:</label>
					<input type="text" class="form-control" id="sigla" name="sigla" placeholder="Sigla do departamento" value="">
				</div>
				<hr>
				<a class="btn btn-warning btn-sm" href='../index.php'>Voltar</a>
				<input class="btn btn-success btn-sm" type='submit' name='botao' value='Adicionar'>
			</form>
		</div>
	</div>
</body>
</html>
