<?php 
class Proposition extends BaseSql{

	protected $id = null;
	protected $status = null;
	protected $idUser;
	protected $idEvent;

	public function __construct() {
		parent::__construct();
	}


	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}


	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
	}


	public function getIdUser() {
		return $this->idUser;
	}

	public function setIdUser($idUser) {
		$this->idUser = $idUser;
	}


	public function getIdEvent() {
		return $this->idEvent;
	}

	public function setIdEvent($idEvent) {
		$this->idEvent = $idEvent;
		return $this;
	}
}