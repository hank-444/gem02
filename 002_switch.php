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
if(strpos($phrase,"燈打開") !== false){ 
$phrase_num=1;
}
if(strpos($phrase,"燈關掉") !== false){ 
$phrase_num=2;
}
if(strpos($phrase,"門打開") !== false){ 
$phrase_num=3;
}
if(strpos($phrase,"機台1") !== false){ 
$phrase_num=4;
}
//$response = $phrase;

switch ($phrase_num) {
    case 1:
		$response = "已經將辦公室的電燈打開";
        break;

    case 2:
		$response = "公司的二樓現在的燈還開著，現在幫您把燈關掉，經確認，物聯數據也是關閉狀態";
        break;
		
	case 3:
		$response = "已經將辦公室的大門打開";
        break;
	case 4:
		$response = "機台1壞了";
        break;	

    default:
        //$response['error'] = 'Invalid phrase parameter';
		$response = "我辦識的文字為".$phrase;
        break;
}

echo json_encode($response);
?>
