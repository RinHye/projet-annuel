<?php
class Token extends BaseSQL{
	const TOKEN_ADD_USER = "add_user";
	const TOKEN_CONNECTION = "connection";

	protected $id = null;
	protected $nom_token;
	protected $token = null;
	protected $id_user;
	protected $date_expiration;

	public function __construct(){
		parent::__construct();
	}
	public function getId() {
		return $this->id;
	}
	public function getToken() {
		return $this->token;
	}

	public function createToken($nom, $id_user = null){
		switch($nom) {
			case self::TOKEN_ADD_USER:
				$this->date_expiration = time() + 1800;
				break;
			case self::TOKEN_CONNECTION:
				$this->date_expiration = time() + 1200;
				break;
			default:
				die("Ce type de token n'existe pas.");
		}
		$this->nom_token = $nom;
		$this->id_user = $id_user;
		$this->token = substr(sha1("GDQgfds4354".$this->email.substr(time(), 5).uniqid()."gdsfd"), 2, 10);
	}
	public function isValid() {
		return time() < $this->date_expiration;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function setNomToken($t) {
		$this->nom_token = $t;
	}
	public function setIdUser($id) {
		$this->id_user = $id;
	}
	public function setToken($t) {
		$this->token = $t;
	}
	public function setDateExpiration($date) {
		$this->date_expiration = $date;
	}

}






