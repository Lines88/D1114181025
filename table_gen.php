<?php


$row_count = $_GET['row_num'];
$col_count = $_GET['col_num'];
$gender = $_GET['gender'];

echo '表格大小:'.''. $row_count .'列，'. $col_count .'行。';
echo '性別:'.$gender;
// 檢查行數和列數是否有效
if ($row_count > 0 && $col_count > 0) {
    // 開始表格標籤
    echo '<table border="1" cellpadding="5" cellspacing="0">';

    // 生成表格內容
    for ($i = 1; $i <= $row_count; $i++) {
        echo '<tr>';  // 開始一行
        for ($j = 1; $j <= $col_count; $j++) {
            echo '<td>行'.$i.' 列'.$j.'</td>';  // 生成一個單元格
        }
        echo '</tr>';  // 結束一行
    }

    // 結束表格標籤
    echo '</table>';
} else {
    echo '請提供有效的行數和列數。';
}


?>
