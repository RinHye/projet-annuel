<?php
class EventController{

	public function indexAction($params){
		// list event
	}
	public function addAction($params){
		$titre = "Ajout événement";
		$event = new Event();
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
		$form = $event->configFormAdd($token->getToken());

		if(!empty($params["POST"])){
			//Verification des saisies
			
			$errors = Validator::validate($form, $params["POST"], $token);

			if(empty($errors)){
				$event->setName($params["POST"]["name"]);
				$event->setStartDate($params["POST"]["startDate"]);
				$event->setEndDate($params["POST"]["endDate"]);
				$event->setStartRegDate($params["POST"]["startRegDate"]);
				$event->setEndRegDate($params["POST"]["endRegDate"]);
				$event->save();
			}
		}
		
		$v = new View("addEvent", "back");
		$v->assign("config",$form);
		$v->assign("errors",$errors);

	}
}
