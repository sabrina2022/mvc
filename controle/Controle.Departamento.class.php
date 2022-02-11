<?php
include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/modelo/Departamento.class.php";

class ControleDepartamento{

	public function inserir($dados){
		$departamento = new Departamento(null,$dados['departamento'],$dados['sigla']);
		$departamento->inserir();
		header("location:../visao/lstDepartamento.php");
	}

	public function listarTodos(){
		$departamento = new Departamento();
		$departamentos = $departamento->listarTodos();
		return $departamentos;
	}

	public function listarUm($id){
		$departamento = new Departamento($id,null,null);
		$departamento->listarUm();
		return $departamento;
	}

	public function excluir($id){
		$departamento = new Departamento($id,null,null);
		$departamento->excluir();
	}

	public function alterar($dados){
		$departamento = new Departamento($dados['id'],$dados['departamento'],$dados['sigla']);
		$departamento->alterar();
		header("location: lstDepartamento.php");
	}


}

?>
