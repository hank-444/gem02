<?php
header('Content-Type: application/json');

// 檢查是否有phrase參數
if (!isset($_GET['phrase'])) {
    echo json_encode([
        'error' => 'Missing required parameter: phrase'
    ]);
    exit;
}

$phrase = $_GET['phrase'];
$response = [];

// 根據phrase的值設置響應
$phrase_num=0;
if(strpos($phrase,"機台1") !== false){ 
$phrase_num=1;
}
if(strpos($phrase,"機台2") !== false){ 
$phrase_num=2;
}
if(strpos($phrase,"機台3") !== false){ 
$phrase_num=3;
}
if(strpos($phrase,"燈打開") !== false){ 
$phrase_num=4;
}
//$response = $phrase;

switch ($phrase_num) {
    case 1:
		$response = "機台1目前運作正常，今加已生產10000件零件";
        break;

    case 2:
		$response = "機台2今日保養維修，人員已轉到機台3工作";
        break;
		
	case 3:
		$response = "機台3目前運作正常，今加已生產20000件零件";
        break;
	case 4:
		$response = "燈壞了";
        break;	

    default:
        //$response['error'] = 'Invalid phrase parameter';
		$response = "我辦識的文字為".$phrase;
        break;
}

echo json_encode($response);
?>
