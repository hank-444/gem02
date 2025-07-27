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

//問：公司的電燈忘記關了，將辦公室電燈關掉
$response = "好的，"."公司的二樓現在的燈還開著，現在幫您把燈關掉，經確認，物聯數據也是關閉狀態";
// 根據phrase的值設置響應
echo json_encode($response);
?>