
<?php
// Chuỗi  palindrome là chuỗi đọc xuôi hay ngược gì cũng giống nhau, ví dụ 22222, aaaaaa,...
function chuoidaonguoc($chuoi){
    $chuoi1='';
    $dodai=0;
    while(isset($chuoi[$dodai])){
        $dodai++;
    }
    for($i=$dodai -1; $i>=0; $i--){
        $chuoi1 .=$chuoi[$i];
    }
    return $chuoi1;
}
echo "Enter any string: ";
$chuoi = trim(fgets(STDIN));
$chuoi=preg_replace('/[^A-Za-z0-9]/','',strtolower($chuoi));
$chuoi2=chuoidaonguoc($chuoi);
if($chuoi===$chuoi2){
    echo $chuoi." is a palindrome";
}
else{
    echo $chuoi." is not a palindrome";
}
// Hoac minh co the dung ham strrev() de dao nguoc chuoi
?>