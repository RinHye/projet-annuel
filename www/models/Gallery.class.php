<?php 
class Gallery extends BaseSql{

	protected $id = null;
	protected $name;
	protected $url;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getName() {
		return $this->name;
	} 
	public function setName($name) {
		$this->name = $name;
	}

	public function getUrl() {
		return $this->url;
	}
	public function setUrl($url) {
		$this->url = $url;
	}
}