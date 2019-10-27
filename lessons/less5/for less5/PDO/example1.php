<?// � ������ ������
define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_NAME','test');
define('DB_USER','root');
define('DB_PASS','');
 
try
{
	// ����������� � ����� ������
 
	$connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
	$db = new PDO($connect_str,DB_USER,DB_PASS);
 
	// ��������� ��������� ����� � ������� 
	$rows = $db->exec("INSERT INTO `testing` (name,email) VALUES
		('Ivan', 'ivan@test.com'),
		('Petr', 'petr@test.com'),
		('Vasiliy', 'vasiliy@test.com')
	");
 
	// � ������ ������ SQL ��������� ������� �������� �� ������
 
	$error_array = $db->errorInfo();
 
	if($db->errorCode() != 0000)
 
	echo "SQL ������: " . $error_array[2] . '<br />';
 
	// ���� ������ ��� �������� �������,
	// �� ������� ���������� ���������� �����
 
	if($rows) echo "���������� ���������� �����: " . $rows. "<br />";
 
	// ������ ������� ��������� ������� �� ����
 
	$result = $db->query("SELECT * FROM `testing` LIMIT 2");
 
	// � ������ ������ SQL ��������� ������� �������� �� ������
 
	$error_array = $db->errorInfo();
 
	if($db->errorCode() != 0000)
 
	echo "SQL ������: " . $error_array[2] . '<br /><br />';
 
	// ������ �������� ������ �� ������ PDOStatement
 
	while($row = $result->fetch())
	{
		// � ���������� �������� ������������� ������
		print_r($row);
	}
}
catch(PDOException $e)
{
	die("Error: ".$e->getMessage());
}