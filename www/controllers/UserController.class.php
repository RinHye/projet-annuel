<?php
class UserController{

	public function addAction($params){
		$user = new User();
		if (empty($params["POST"])) {
			$token = new Token();
			$token->createToken(Token::TOKEN_ADD_USER);
			$token->save();
		}
		else {
			$tokens = Token::findByColumns(array(
				"token" => $params["POST"]["token"],
				"nom_token" => Token::TOKEN_ADD_USER,
				"id_user" => null
			));
			if (empty($tokens) || !$tokens[0]->isValid()) {
				$token = new Token();
				$token->createToken(Token::TOKEN_ADD_USER);
				$token->save();
				$tokenValue = $token->getToken();
			}
			else {
				$token = $tokens[0];
			}
		}
		$form = $user->configFormAdd($token->getToken());

		if(!empty($params["POST"])){
			//Verification des saisies
			
			$errors = Validator::validate($form, $params["POST"], $token);

			if(empty($errors)){
				$user->setFirstname($params["POST"]["firstname"]);
				$user->setLastname($params["POST"]["lastname"]);
				$user->setBirthday($params["POST"]["birthday"]);
				$user->setEmail($params["POST"]["email"]);
				$user->setPwd($params["POST"]["pwd"]);
				$user->save();
			}
		}
		
		$v = new View("addUser", "special");
		$v->assign("config",$form);
		$v->assign("errors",$errors);

	}
	public function connectAction($params) {
		$user = new User();
		if (empty($params["POST"])) {
			$token = new Token();
			$token->createToken(Token::TOKEN_CONNECTION);
			$token->save();
		}
		else {
			$tokens = Token::findByColumns(array(
				"token" => $params["POST"]["token"],
				"nom_token" => Token::TOKEN_CONNECTION,
				"id_user" => null
			));
			if (empty($tokens) || !$tokens[0]->isValid()) {
				$token = new Token();
				$token->createToken(Token::TOKEN_CONNECTION);
				$token->save();
				$tokenValue = $token->getToken();
			}
			else {
				$token = $tokens[0];
			}
		}
		$form = $user->configFormConnect($token->getToken());

		if(!empty($params["POST"])){
			//Verification des saisies
			
			$errors = Validator::validate($form, $params["POST"], $token);

			if(empty($errors)){
				$_SESSION['id'] = $user->getId();
			}
		}
		
		$v = new View("connect", "special");
		$v->assign("config",$form);
		$v->assign("errors",$errors);

	}

	public function removeAction($params){
		echo "Action de suppression d'un user";
		echo "<pre>";
		print_r($params);
	}

	function disconnect() {
		if (isset($_SESSION['id_user'])) {
			unset($_SESSION['id_user']);
		}
	}
	
}