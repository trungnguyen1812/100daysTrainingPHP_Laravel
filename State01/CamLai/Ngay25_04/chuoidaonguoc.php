<?php
function daoNguocChuoi($chuoi){
    $chuoi1= '';
    $length=0;
    while(isset($chuoi[$length])){
        $length++;
    }
    for ($i=$length-1; $i>=0; $i--){
        $chuoi1 .=$chuoi[$i];
    }
    return $chuoi1;
}
echo "Nhap vao 1 chuoi: ";
$chuoi=trim(fgets(STDIN));
echo "Chuoi dao nguoc la: ",daoNguocChuoi($chuoi);
?>
