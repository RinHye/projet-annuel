<?php 
class ImageEvent extends BaseSql{

	protected $id = null;
	protected $idEvent = null;
	protected $idGallery = null;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getIdEvent() {
		return $this->idEvent;
	}
	public function setIdEvent($idEvent) {
		$this->idEvent = $idEvent;
	}

	public function getIdGallery() {
		return $this->idGallery;
	}
	public function setIdGallery($idGallery) {
		$this->idGallery = $idGallery;
	}
}