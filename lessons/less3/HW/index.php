<?php

// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
  
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
  
  // подгружаем шаблон
  $template = $twig->loadTemplate('gallery.tmpl');
  
  // передаём в шаблон переменные и значения
  $images = array_slice(scandir('gallery_img/small'), 2);
  $content = $template->render( array(
      'images' => $images
  ));


  // выводим сформированное содержание
  echo $content;
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

// try {
//     $host = '127.0.0.1:3307';
//     $db   = 'test';
//     $user = 'root';
//     $pass = '';
//     $charset = 'utf8';

//     $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//     $opt = [
//         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES   => false,
//     ];
//     $pdo = new PDO($dsn, $user, $pass, $opt);
// } catch (PDOException $e) {
//     echo "Error: Could not connect. " . $e->getMessage();
//   }
// 
// $stmt = $pdo->query('SELECT * FROM paths';);
// while ($row = $stmt->fetch())
// {
//     echo $row['path'] . "\n";
// }

?>