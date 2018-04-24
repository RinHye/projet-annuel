<?php
class BaseSQL{
	const ALLOWED_OPERATORS = ["=", "<>", "!=", "<", ">"];

	private $pdo;
	private $table;
	private $columns;

	public function __construct(){
		try{
			$this->pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		$this->table = strtolower(get_called_class());
		$this->setColumns();
	}
		

	public function setColumns(){
		$this->columns = array_diff_key(
					get_object_vars($this), 
					get_class_vars(get_class()));
	}


	public function save(){
		$this->setColumns();

		if( $this->id ){
			//UPDATE
			foreach ($this->columns as $key => $value) {
				$sqlSet[] = $key."=:".$key;
			}

			$query = $this->pdo->prepare(" UPDATE ".$this->table." SET ".implode(",", $sqlSet)." WHERE id=:id ");
			
			$query->execute($this->columns);


		}else{
			//INSERT
			unset($this->columns['id']);

			$query = $this->pdo->prepare("
					INSERT INTO ".$this->table." 
					(". implode(",", array_keys($this->columns)) .")
					VALUES
					(:". implode(",:", array_keys($this->columns)) .")
				");

			$query->execute($this->columns);
			$id = $this->pdo->lastInsertId();
			$this->setId($id);
		}
	}

	public function remove() {
		if(!$this->id) {
			die("Pas d'identifiant spécifié");
		}
		else {
			$query = $this->pdo->prepare("DELETE FROM ".$this->table." WHERE id=:id");
			$query->execute([":id" => $this->id]);
		}

	}

	public static function findAll() {
		$class = get_called_class();
		$table = strtolower($class);
		try{
			$pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		$query = $pdo->query("SELECT * FROM ".$table);

		$objects = [];

		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$object = new $class();

			foreach($row as $key => $value) {
				$set = 'set' . str_replace("_", "", ucwords($key, "_"));
				$object->$set($value);
			}
			$objects[] = $object;
		}
		
		return $objects;
	}

	public static function findByCondition($columnName, $value, $operator) {
		$class = get_called_class();
		$table = strtolower($class);
		$columns = array_diff_key(
					get_class_vars($class), 
					get_class_vars(get_class()));
		try{
			$pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		if(!in_array($operator, self::ALLOWED_OPERATORS)) {
			die("L'opérateur demandé n'existe pas.");
		}
		else {
			$param = [];
			
			if (array_key_exists($columnName, $columns)) {
				$sql .= "SELECT * FROM ".$table." WHERE " . $columnName." ".$operator." :".$columnName;
				$param[":".$columnName] = $value;
			}
			else {
				die("Colonne non définie dans la table");
			}
			
			$query = $pdo->prepare($sql);
			
			$query->execute($param);
			
			$objects = [];

			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$object = new $class();

				foreach($row as $key => $value) {
					$set = 'set' . str_replace("_", "", ucwords($key, "_"));
					$object->$set($value);
				}
				$objects[] = $object;
			}
			
			return $objects;
		}
	}

	/*
	 * param $array:
	 *				['columnName1' => [
	 									'value' => 'value1',
	 									'operator' => 'operator1'
	 								  ]
	 *				...
	 *				]	
	 *
	 */
	public static function findByConditions($array) {
		$class = get_called_class();
		$table = strtolower($class);
		$columns = array_diff_key(
					get_class_vars($class), 
					get_class_vars(get_class()));
		try{
			$pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		if(empty($array)) {
			die("Pas de colonnes spécifiées");
		}
		else {
			$sql = "SELECT * FROM ".$table." WHERE 1 = 1";
			$param = [];
			foreach($array as $columnName => $c) {
				if(!in_array($c["operator"], self::ALLOWED_OPERATORS)) {
					die("L'opérateur demandé n'existe pas.");
				}
				else {
					if (array_key_exists($columnName, $columns)) {
						$sql .= " AND ".$columnName." ".$c["operator"]." :".$columnName;
						$param[":".$columnName] = $c["value"];
					}
					else {
						die("Colonne non définie");
					}
				}
			}
			$query = $$pdo->prepare($sql);
			
			$query->execute($param);
			
			$objects = [];

			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$object = new $class();

				foreach($row as $key => $value) {
					$set = 'set' . str_replace("_", "", ucwords($key, "_"));
					$object->$set($value);
				}
				$objects[] = $object;
			}
			
			return $objects;
		}
	}

	public static function findByColumn($columnName, $value) {
		$class = get_called_class();
		$table = strtolower($class);
		$columns = array_diff_key(
					get_class_vars($class), 
					get_class_vars(get_class()));
		try{
			$pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		$param = [];
		
		if (array_key_exists($columnName, $columns)) {
			$sql .= "SELECT * FROM ".$table." WHERE " . $columnName." = :".$columnName;
			$param[":".$columnName] = $value;
		}
		else {
			die("Colonne non définie dans la table");
		}
		
		$query = $pdo->prepare($sql);
		
		$query->execute($param);
		
		$objects = [];

		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$object = new $class();

			foreach($row as $key => $value) {
				$set = 'set' . str_replace("_", "", ucwords($key, "_"));
				$object->$set($value);
			}
			$objects[] = $object;
		}
		
		return $objects;
	}

	public static function findByColumns($array) {
		$class = get_called_class();
		$table = strtolower($class);
		$columns = array_diff_key(
					get_class_vars($class), 
					get_class_vars(get_class()));
		try{
			$pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		if(empty($array)) {
			die("Pas de colonnes spécifiées");
		}
		else {
			$sql = "SELECT * FROM ".$table." WHERE 1 = 1";
			$param = [];
			foreach($array as $columnName => $value) {
				if (array_key_exists($columnName, $columns)) {
					if (is_null($value)) {
						$sql .= " AND ".$columnName." IS NULL";
					}
					else {
						$sql .= " AND ".$columnName." = :".$columnName;	
						$param[":".$columnName] = $value;
					}
				}
				else {
					die("Colonne non définie");
				}
			}
			$query = $pdo->prepare($sql);
			
			$query->execute($param);
			
			$objects = [];

			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$object = new $class();

				foreach($row as $key => $value) {
					$set = 'set' . str_replace("_", "", ucwords($key, "_"));
					$object->$set($value);
				}
				$objects[] = $object;
			}
			
			return $objects;
		}
	}

	public function find($id) {
		if(!$id) {
			die("Pas d'identifiant spécifié");
		}
		else {
			$query = $this->pdo->prepare("SELECT * FROM ".$this->table." WHERE id=:id");
			$query->execute([":id" => $id]);
			$object = $query->fetch(PDO::FETCH_ASSOC);
			if ($object == null) {
				throw new NotFoundException();
			}
			foreach($object as $key => $value) {
				$set = 'set' . str_replace("_", "", ucwords($key, "_"));
				$this->$set($value);
			}
		}
	}
}





