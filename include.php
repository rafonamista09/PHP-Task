<?php 

	class StringGetter {

		public $string;

		public function __construct($string) {

			$this->string = $string;

		}

		public function getString() {

			return $this->string;

		}

	}


?>