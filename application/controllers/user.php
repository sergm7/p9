<?php

final class User extends Controller {
		function __construct ($params){
				parent::__construct ($params);
				$this->model=new user;
		}



		function show(){
		$data=Request::getParams();
		$val1 = $data[3];
		$this->loader->vista('vuser.php', $this->model->show($val1));
				

		}
	

}