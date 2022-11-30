<?php
    $name ='Tran Thi Thu Phuong';
    $arrName = explode(' ', $name);
    echo 'Họ : '.$arrName[0];
    echo '<br/>';
    echo 'Đệm : '; for($i = 1; $i <= count($arrName) -2; $i++) { echo $arrName[$i].' ' ;};
    echo '<br/>';
    echo 'Tên : '.$arrName[count($arrName) - 1];