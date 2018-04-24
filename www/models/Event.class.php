<?php 
class Event extends BaseSql{

	protected $id = null;
	protected $idType = null;
	protected $idGallery = null;
	protected $idUsers = null;
	protected $name = "";
	protected $startDate;
	protected $endDate;
	protected $startRegDate;
	protected $endRegDate;
	protected $nbParticipant = 0;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getIdType() {
		return $this->idType;
	}
	public function setIdType($idType) {
		$this->idType = $idType;
	}

	public function getIdGallery() {
		return $this->idGallery;
	} 
	public function setIdGallery($idGallery) {
		$this->idGallery = $idGallery;
	}

	public function getIdUsers() {
		return $this->idUsers;
	}
	public function setIdUsers($idUsers) {
		$this->idUsers = $idUsers;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}

	public function getStartDate() {
		return $this->startDate;
	}
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}

	public function getEndDate() {
		return $this->endDate;
	} 
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
	}
	
	public function getStartRegDate() {
		return $this->startRegDate;
	}
	public function setStartRegDate($startRegDate) {
		$this->startRegDate = $startRegDate;
	}

	public function getEndRegDate() {
		return $this->endRegDate;
	}
	public function setEndRegDate($endRegDate) {
		$this->endRegDate = $endRegDate;
	}

	public function getNbParticipant() {
		return $this->nbParticipant;
	}
	public function setNbParticipant($nbParticipant) {
		$this->nbParticipant = $nbParticipant;
	}
}