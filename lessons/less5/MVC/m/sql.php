<?php
include_once 'config/db.php';
   
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
			$this->db = new PDO(DRIVER . ':host='. SERVER . ';dbname=' . DB, USERNAME, PASSWORD);
			$this->db->exec('SET NAMES UTF8');
			$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        
        public function Select($request){

        }

        public function Update($request){

        }

        public function Insert($request){

        }

        public function Delete($request){

        }


    }