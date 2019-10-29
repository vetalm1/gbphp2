<?
define(INC_PATH, $_SERVER['DOCUMENT_ROOT'].'/inc/');
define(DB_NAME, 'progernote_atdb');
class Database {
	private $status;
	public function dbConnect($local) {
		if($local == true) 
		{
			$this->status = new mysqli('localhost', 'root', '', DB_NAME);
		}
		mysqli_set_charset($this->status, 'utf8');
	}
	public function tablePrint($table) {
		//$max = $id+25;
		if($this->status) {
			$query = mysqli_query($this->status, "SELECT * FROM {$table}");
			$arResult = [];
			while( $row = mysqli_fetch_assoc($query) ){
				$arResult[] = $row;
		    }
			return $arResult;
		}
	}
	public function addItems() {
		$mysqli = $this->status;
		for($i = 101; $i <= 101; $i++) {
			$results = iconv('windows-1251', 'UTF-8', $mysqli->query("INSERT INTO `catalog` (`id`, `title`, `price`, `description`, `image`) VALUES (NULL, 'Товар {$i}', '{$i}00', 'Описание товара {$i}', '/upload/catalog/image{$i}.jpg')"));
		}
	}
}
class Page {
	private $path = INC_PATH;
	public function incFile($dir) {
		$srcFile = $this->path.$dir;
		if(file_exists($srcFile)) 
		{
			require($srcFile);
		} 
		else 
		{
			die();
		}
	}
}
$page = new Page();
$database = new Database();
$database->dbConnect(true);
//$database->addItems();?>