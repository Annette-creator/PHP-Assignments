<?php
	class Animal {
		public $name;
		public function __construct($name) {
			$this->name = $name;
		}
		public function talk() {
			return '?';
		}
		public function eats(){
		    return '?';                          
		}
		public function barks(){
			return '?';
		}
	}

	if (!function_exists('boolval')) {
		function boolval($var){
			return (bool) $var;
		}
	}

	//class met elementen voor aap
	class Cat extends Animal {
		public function talk() {
			return 'miauw';
		}
		public function eats(){
			return 'brokjes';
		}
		public function barks(){
			return false;
		}
	}
	//class met elementen voor aap
	class Dog extends Animal {
		public function talk() {
			return 'waf, waf';
		}
		public function eats(){
			return 'brokjes';
		}
		public function barks(){
			return true;
		}
	}
	//class met elementen voor aap
	class Aap extends Animal {
		public function talk() {
			return 'oeh-aah-oeh';
		}
		public function eats(){
			return 'bananen';
		}
		public function barks(){
			return false;
		}				
	}	
	//class met elementen voor aap
	class Gecko extends Animal {
		public function talk() {
			return 'gekko, gekko';
		}
		public function eats(){
			return 'levend voer';
		}	
		public function barks(){
			return false;
		}			
	}
	//class met elementen voor aap
	class Goudvis extends Animal {
		public function talk() {
			return 'blub, blub';
		}
		public function eats(){
			return 'vissenvoer';
		}	
		public function barks(){
			return false;
		}			
	}

?>