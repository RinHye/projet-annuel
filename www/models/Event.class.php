<?php 
class Event extends BaseSql{

	protected $id = null;
	protected $idType = null;
	protected $idGallery = null;
	protected $idUser = null;
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
	public function configFormAdd($token = null){

		return [
			"config"=>["method"=>"POST", "action"=>"", "submit"=>"Ajouter"],

			"input"=>[

				"name"=>[
					"type"=>"text",
					"placeholder"=>"Le nom de votre événement",
					"required"=>true, 
					"minString"=>2, 
					"maxString"=>100
				],
				"startDate"=>[
					"type"=>"date",
					"placeholder"=>"Date de debut de votre événement",
					"required"=>true
				],
				"endDate"=>[
					"type"=>"date",
					"placeholder"=>"Date de fin de votre événement",
					"required"=>false
				],
				"startRegDate"=>[
					"type"=>"date",
					"placeholder"=>"Date de début des inscriptions",
					"required"=>false
				],
				"endRegDate"=>[
					"type"=>"date",
					"placeholder"=>"Date de fin des inscriptions",
					"required"=>false
				],
				"token"=>[
					"type"=>"hidden",
					"value"=>$token,
					"required"=>true
				]

			]
		];
	}
}