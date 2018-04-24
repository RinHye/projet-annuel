<?php
class User extends BaseSQL{

	protected $id = null;
	protected $firstname;
	protected $lastname;
	protected $birthday;
	protected $email;
	protected $pwd;

	protected $status=0;

	public function __construct(){
		parent::__construct();
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getFirstname() {
		return $this->firstname;
	}
	public function setFirstname($firstname){
		$this->firstname = ucfirst(strtolower(trim($firstname)));	
	}
	public function getLastname() {
		return $this->name;
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function getEmail() {
		return $this->email;

	}
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function getPwd() {
		return $this->pwd;
	}
	public function setPwd($pwd){
		$this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
	}
	
	public function getBirthday() {
		return $this->birthday;
	}
	public function setBirthday($birthday) {
		$this->birthday=$birthday;
	}
	
	
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status=$status;
	}
	public function getRegisterDate() {
		return $this->register_date;
	}
	public function setRegisterDate($register_date){
		$this->register_date = $register_date;
	}

	public function configFormConnect($token = null){
		return [
					"config"=>["method"=>"POST", "action"=>"", "submit"=>"Se connecter"],

					"input"=>[

						"email"=>[
							"type"=>"email",
							"placeholder"=>"Votre email",
							"required"=>true
						],
						"pwd"=>[
							"type"=>"password",
							"placeholder"=>"Votre mot de passe",
							"required"=>true
						],
						"token"=>[
							"type"=>"hidden",
							"value"=>$token,
							"required"=>true
						]

					]
				];
	}
	public function configFormAdd($token = null){

		return [
					"config"=>["method"=>"POST", "action"=>"", "submit"=>"S'inscrire"],

					"input"=>[

						"firstname"=>[
										"type"=>"text",
										"placeholder"=>"Votre prénom",
										"required"=>true, 
										"minString"=>2, 
										"maxString"=>100
									],
						"lastname"=>[
							"type"=>"text",
							"placeholder"=>"Votre nom",
							"required"=>true,
							"minString"=>2,
							"maxString"=>100
						],
						"birthday"=>[
							"type"=>"date",
							"placeholder"=>"Votre date de naissance",
							"required"=>true
						],
						"email"=>[
							"type"=>"email",
							"placeholder"=>"Votre email",
							"required"=>true
						],
						"emailConfirm"=>[
							"type"=>"email",
							"placeholder"=>"Confirmation",
							"required"=>true,
							"confirm"=>"email"
						],
						"pwd"=>[
							"type"=>"password",
							"placeholder"=>"Votre mot de passe",
							"required"=>true
						],
						"pwdConfirm"=>[
							"type"=>"password",
							"placeholder"=>"Confirmation",
							"required"=>true,
							"confirm"=>"pwd"
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






