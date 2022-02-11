<?php
include $_SERVER['DOCUMENT_ROOT']."/desenvolvimento/mvc/_db/MySQL.class.php";

	class Contato{
		private $id;
		private $nome;
		private $numero;
		private $departamento_id;

		public function __construct($id = null, $nome = null, $numero = null, $departamento_id = null){
			$this->id = $id;
			$this->nome = $nome;
			$this->numero = $numero;
			$this->departamento_id = $departamento_id;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getDepartamento_id(){
			return $this->departamento_id;
		}

		public function setDepartamento_id($departamento_id){
			$this->departamento_id = $departamento_id;
		}

		public function inserir(){
			$con = new MySQL();
			$sql = "INSERT INTO contato (nome,numero,departamento_id) VALUES ('$this->nome','$this->numero','$this->departamento_id')";
			$con->executa($sql);
		}

		public function listarTodos(){
			$con = new MySQL();
			$sql = "SELECT * FROM contato";
			$resultados = $con->consulta($sql);
			if(!empty($resultados)){
				$contatos = array();
				foreach($resultados as $resultado){
					$contato = new Contato();
					$contato->setId($resultado['id']);
					$contato->setNome($resultado['nome']);
					$contato->setNumero($resultado['numero']);
					$contato->setDepartamento_id($resultado['departamento_id']); 
					$contatos[] = $contato;
				}
				return $contatos;
			}else{
				return false;
			}
		}

		public function listarUm(){
			$con = new MySQL();
			$sql = "SELECT * FROM contato WHERE id = $this->id";
			$resultado = $con->consulta($sql);
			if(!empty($resultado)){
					$this->nome = $resultado[0]['nome'];
					$this->numero = $resultado[0]['numero'];
					$this->departamento_id = $resultado[0]['departamento_id'];
			}else{
				return false;
			}
		}

		public function excluir(){
			$con = new MySQL();
			$sql = "DELETE FROM contato WHERE id = $this->id";
			$con->executa($sql);
		}

		public function alterar(){
			$con = new MySQL();
			$sql = "UPDATE contato SET nome = '$this->nome', numero = '$this->numero' WHERE id = $this->id";
			echo $sql;
			$con->executa($sql);
		}

	}
?>
