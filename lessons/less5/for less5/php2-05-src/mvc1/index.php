<?
  include "model/gallery.php";
  
  if(isset($_FILES["photo"])){
      add_photo($_FILES["photo"]);
  }
  //�������� ������ ����� ����������
  $photos = gallery();
  $title = "������� ����������";
  
  if(isset($_GET["view"])){
    $content = "templates/content_list.php";
  }
  else{
    $content = "templates/content_table.php";
  }
  include "templates/main.php";
  
  


?>