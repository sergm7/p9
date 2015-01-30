<?php
	class Controller{
		protected $conf;
		protected $view;
		protected $params;
		public $loader;
		public $model;

		function __construct($parameters){
			$this->params =$parameters;
			$this->conf = Config::getIns();
			$this->loader = new Loader();

		}

	}