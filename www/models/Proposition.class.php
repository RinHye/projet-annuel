<?php 
class Proposition extends BaseSql{

	protected $id = null;
	protected $idUser = null;
	protected $date;
	protected $text;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getIdUser() {
		return $this->idUser;
	}
	public function setIdUser($idUser) {
		$this->idUser = $idUser;
	}

	public function getDate() {
		return $this->date;
	}
	public function setDate($date) {
		$this->date = $date;
	}

	public function getText() {
		return $this->text;
	}
	public function setText($text) {
		$this->text = $text;
	}
}