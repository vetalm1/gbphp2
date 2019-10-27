<?php
//require('config/db.php');
require($_SERVER['DOCUMENT_ROOT'].'/config/db.php');
   
	class SQL {
		private static $instance;
        private $db;
		
		public static function Instance() {
			if (self::$instance == null) {
				self::$instance = new SQL();
			}
			return self::$instance;
		}
		
        private function __construct() {
			setlocale(LC_ALL, 'ru_RU.UTF8');
            $this->$db = new PDO(DRIVER . ':host='.SERVER.';dbname='.DB , USERNAME, PASSWORD);
			$this->$db->exec('SET NAMES UTF8');
			$this->$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // для фетча
        }
        
        public function Select($query, $array){
            $q = $this->$db->prepare($query);
            $q->execute($array);
            return $q->fetchAll();

        }

        public function UID($query, $array){
            $q = $this->$db->prepare($query);
            $q->execute($array);
            return $q; //->fetchAll();

        }

    }

