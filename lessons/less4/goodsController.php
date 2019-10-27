<?php
$count = $_POST['sendCountGoods'];
$action = $_POST['action'];

try {
    $host = '127.0.0.1:3307'; // не забываем порт
    $db   = 'test';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // можно еще добавить сюда порт port:3307 или порт от друго базы данных
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo "Error: Could not connect. " . $e->getMessage();
  }

$query = "SELECT * FROM test.goods3 LIMIT $count,25;";  
$stmt = $pdo->query($query);

while ($row = $stmt->fetch())
{
    $employes[] = $row;
    // можно записать тожесамое но без цикла
    //$employes= $stmt->fetchAll(PDO::FETCH_ASSOC)
    /////////////////////////////////////////
}



// Если реализовывать через json
//header('Content-Type:application/json');
//echo json_encode($employes);

?>

    <table class='table'>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($employes as $good) : ?>
            <tr class="text-success">
                <th>000<?=$good['id']?></td>             
                <td><?=$good['name']?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    