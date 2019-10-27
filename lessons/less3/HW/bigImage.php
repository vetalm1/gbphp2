<?php

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('bigImage.tmpl');
  
  
  $name = $_GET['name'];
  $content = $template->render( array(
      'name' => $name
  ));

  echo $content;
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>