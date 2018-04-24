<?php 
class Commentaire extends BaseSql{

	protected $id = null;
	protected $idEvent = null;
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

	public function getIdEvent() {
		return $this->idEvent;
	}
	public function setIdEvent($idEvent) {
		$this->idEvent = $idEvent;
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