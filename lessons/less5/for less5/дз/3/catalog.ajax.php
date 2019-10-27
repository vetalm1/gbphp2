<?require_once($_SERVER['DOCUMENT_ROOT'].'/inc/main.php');
if($_POST) {
	$i = $_POST['GOODS'];
	$max = $i + 24;
	$htmlStr = '';
	$arCatalog = $database->tablePrint('catalog',$id);
	$result = [];
	for($i; $i <= $max; $i++) {
		$htmlStr .= "<div class='catalog-item col-2' data-id=";
		$htmlStr .= $arCatalog[$i]['id']."><h4 class='item-title'>";
		$htmlStr .= $arCatalog[$i]['title']."</h4><img src=";
		$htmlStr .= $arCatalog[$i]['image']." class='item-image'><div class='item-description'><p>";
		$htmlStr .= $arCatalog[$i]['description']."</p></div><div class='item-price'><span class='price'>";
		$htmlStr .= $arCatalog[$i]['price']."&nbsp;руб.</span><a href='' class='buy-btn'>Купить</a></div></div>";
	}
	$result['html'] = $htmlStr;
	echo json_encode($result);
}
?>