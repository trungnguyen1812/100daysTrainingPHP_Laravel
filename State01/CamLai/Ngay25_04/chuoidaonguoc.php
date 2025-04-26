<?php
function daoNguocChuoi($chuoi){
    $chuoi1= ''; // Tạo chuỗi kết quả trướctrước
    $length=0; // Tạo biến này để lưu độ dài chuỗichuỗi
    // Kiếm tra kí tự đầu rồi đếm chuỗichuỗi
    while(isset($chuoi[$length])){
        $length++;
    }
    // Duyệt từ sau ra trước
    for ($i=$length-1; $i>=0; $i--){
        $chuoi1 .=$chuoi[$i];
    }
    return $chuoi1;
}
echo "Nhap vao 1 chuoi: ";
$chuoi=trim(fgets(STDIN));
echo "Chuoi dao nguoc la: ",daoNguocChuoi($chuoi);
?>
