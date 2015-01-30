<?php

	class loader{

		public function vista($route,$var){

			extract($var);
			require VIEWS_PATH.$route;
		}

	}