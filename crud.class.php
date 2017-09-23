<?php
	
	require_once 'db.class.php';

	abstract class Crud
		{
		protected $table;
		abstract public function insert();
		

		public function find($id)
		{
			$sql="SELECT * FROM $this->table WHERE id=:id";
			$stmt=Db::prepare($sql);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			return $stmt->fetch(pdo::FETCH_ASSOC);
		}
		public function findall()
		{
			$sql="SELECT * FROM $this->table";
			$stmt=Db::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function deletar($id)
		{
			$sql="DELETAR FROM $this->table WHERE id=:id";
			$stmt=Db::prepare($sql);
			$stmt->bindParam(':id',$id,pdo::PARAM_INT);
			return $stmt->execute();
		}
	}

?>