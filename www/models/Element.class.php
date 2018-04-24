<?php 
class Element extends BaseSql{

	protected $id = null;
	protected $idPage = null;
	protected $idTypeElement= null
	protected $value;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getIdPage() {
		return $this->idPage;
	}
	public function setIdPage($idPage) {
		$this->idPage = $idPage;
	}

	public function getIdTypeElement() {
		return $this->idTypeElement;
	}
	public function setIdTypeElement($idTypeElement) {
		$this->idTypeElement = $idTypeElement;
	}

	public function getValue() {
		return $this->value;
	}
	public function setValue($value) {
		$this->value = $value;
	}
}