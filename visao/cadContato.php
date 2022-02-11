<?php
	if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
		include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/controle/Controle.Contato.class.php";
		$cControle = new ControleContato();
		$cControle->inserir($_POST);
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
		<h1 class="centralizado">Formulário de Inclusão de Contatos</h1>
		<div class="formulario">
			<form method='post' action='cadContato.php'>
				<!-- nome -->
				<div class="col-sm-10 mb-3">
					<label for="groupNome" class="form-label">Nome:</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Contato" value="">
				</div>
				<!-- telefone -->
				<div class="col-sm-10 mb-3">
					<label for="groupFone" class="form-label">Telefone</label>
					<input type="text" class="form-control" id="numero" name="numero" placeholder="Número de telefone do contato" value="">
				</div>
				<div class="col-sm-10 mb-3">
					<label for="groupFone" class="form-label">Departamento</label><br>
					<select name="departamento_id" id="" required>
                    	<option value="" selected>Selecione um departamento</option>
						<?php
							include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/controle/Controle.Departamento.class.php";
							$cDepartamento = new ControleDepartamento();
							$departamentos = $cDepartamento->listarTodos();

							foreach($departamentos as $departamento){
								$id = $departamento->getId();
								$sigla = $departamento->getSigla();
								echo"<option value=$id>$sigla</option>";
							}
						?>
				    </select>
				</div>
				<hr>
				<a class="btn btn-warning btn-sm" href='../index.php'>Voltar</a>
				<input class="btn btn-success btn-sm" type='submit' name='botao' value='Adicionar'>
			</form>
		</div>
	</div>
</body>
</html>
