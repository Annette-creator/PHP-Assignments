<?php
	class DBConnect {
		static $db;
		private $dbh;

		private function __construct() {
			try {
				$this->dbh = new PDO('mysql:host=localhost;dbname=customers', 'root', 'root');
				$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		public static function getInstance() { 
			if (!isset(self::$db)) { 
				self::$db = new DBConnect() ; 
			} 
			return self::$db->dbh; 
		} 
	}
?>