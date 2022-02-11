<?php
include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/_db/MySQL.class.php";

	class Departamento{
		private $id;
		private $departamento;
		private $sigla;

		public function __construct($id = null, $departamento = null, $sigla = null){
			$this->id = $id;
			$this->departamento = $departamento;
			$this->sigla = $sigla;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getDepartamento(){
			return $this->departamento;
		}

		public function setDepartamento($departamento){
			$this->departamento = $departamento;
		}

		public function getSigla(){
			return $this->sigla;
		}

		public function setSigla($sigla){
			$this->sigla = $sigla;
		}

		public function inserir(){
			$con = new MySQL();
			$sql = "INSERT INTO departamento (departamento,sigla) VALUES ('$this->departamento','$this->sigla')";
			$con->executa($sql);
		}

		public function listarTodos(){
			$con = new MySQL();
			$sql = "SELECT * FROM departamento";
			$resultados = $con->consulta($sql);
			if(!empty($resultados)){
				$departamentos = array();
				foreach($resultados as $resultado){
					$departamento = new Departamento();
					$departamento->setId($resultado['id']);
					$departamento->setDepartamento($resultado['departamento']);
					$departamento->setSigla($resultado['sigla']);
					$departamentos[] = $departamento;
				}
				return $departamentos;
			}else{
				return false;
			}
		}

		public function listarUm(){
			$con = new MySQL();
			$sql = "SELECT * FROM departamento WHERE id = $this->id";
			$resultado = $con->consulta($sql);
			if(!empty($resultado)){
					$this->departamento = $resultado[0]['departamento'];
					$this->sigla = $resultado[0]['sigla'];
			}else{
				return false;
			}
		}

		public function excluir(){
			$con = new MySQL();
			$sql = "DELETE FROM departamento WHERE id = $this->id";
			$con->executa($sql);
		}

		public function alterar(){
			$con = new MySQL();
			$sql = "UPDATE departamento SET departamento = '$this->departamento', sigla = '$this->sigla' WHERE id = $this->id";
			echo $sql;
			$con->executa($sql);
		}

	}
?>
