<?php
	include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/controle/Controle.Contato.class.php";
	$cContato = new ControleContato();

	if(isset($_POST['botao']) && $_POST['botao']=="Editar"){
		var_dump($_POST);
		$cContato->alterar($_POST);
	}else if(isset($_GET['id'])){
		$contato = $cContato->listarUm($_GET['id']);
	}
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
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<div class="container">
	<h1 class="centralizado">Formulário de Edição de Contatos</h1>
	<div class="formulario">
		<form method='post' action='editContato.php'>
			<!-- id -->
			<div class="col-sm-2 mb-3">
				<label for="groupId" class="form-label">ID:</label>
				<input type="text" class="form-control" name="id" placeholder="Identificador do Contato" value=<?php echo $contato->getId(); ?> readonly>
			</div>
			<!-- nome -->
			<div class="col-sm-10 mb-3">
				<label for="groupNome" class="form-label">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Contato" value=<?php echo $contato->getNome(); ?> >
			</div>
			<!-- telefone -->
			<div class="col-sm-10 mb-3">
				<label for="groupFone" class="form-label">Telefone</label>
				<input type="text" class="form-control" id="numero" name="numero" placeholder="Número de telefone do contato" value=<?php echo $contato->getNumero(); ?> >
			</div>
			<hr>
			<a class="btn btn-warning btn-sm" href='../index.php'>Voltar</a>
			<input class="btn btn-secondary btn-sm" type='submit' name='botao' value='Editar'>
		</form>
	</div>
</div>
</body>
</html>
