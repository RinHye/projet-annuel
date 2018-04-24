<?php


class DashboardController{

	public function dashboardAction($params){
		
		$name = "Patrick ESPELETTE";

		$v = new View("dashboard", "back");
		$v->assign("name", $name);
		
	}

}
