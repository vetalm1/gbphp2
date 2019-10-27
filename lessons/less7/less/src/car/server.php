<?
include "config.php";
$id = (int)$_POST['id'];

$res = mysqli_query($connect,"select * from models where id_mark=".$id);


while($data = mysqli_fetch_assoc($res)){
	$models[] = $data['name_model'];
}

echo json_encode($models);