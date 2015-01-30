<?php

	Class mHome{

		public function Info(){
			
			return array(
					'nombre' => 'Sergio',
					'apellido'=> "Lozano"
				);
		}

		public function suma($val1, $val2, $a, $b, ){

			return array(
				'total'=>$val1 + $val2,
				'valor1'=>$val1,
				'valor2'=>$val2
			);
		}

	}
