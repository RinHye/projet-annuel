<?php 
class Page extends BaseSql{

	protected $id = null;
	protected $idUser = null;
	protected $idTypePage= null
	protected $name;
	protected $status=0;
	protected $lastModification;

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

	public function getIdTypePage() {
		return $this->idTypePage;
	}
	public function setIdTypePage($idTypePage) {
		$this->idTypePage = $idTypePage;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
	}

	public function getLastModification() {
		return $this->lastModification;
	}
	public function setLastModification($lastModification) {
		$this->lastModification = $lastModification;
	}
}