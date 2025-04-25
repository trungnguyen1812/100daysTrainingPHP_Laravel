<!-- /*Vấn đề: Tại sao chỉ cần kiểm tra đến √n mà không phải đến n?
Giả sử ta muốn kiểm tra xem một số n có phải là số nguyên tố hay không.

Nếu n không phải là số nguyên tố, thì nó có thể được chia thành tích của hai số:

n = a × b

Giờ xét điều này:

Nếu cả a và b đều lớn hơn √n, thì tích của chúng a × b > n ❌

Vậy ít nhất một trong hai số a hoặc b phải ≤ √n ✅

📍 Kết luận: Nếu n có ước khác ngoài 1 và chính nó → ta sẽ tìm thấy ước đó trước hoặc bằng √n
*/ -->

// Cach 1: Duyet tu 2 den sqrt(n)
<?php
function is_Prime_Number($number){
    if($number <= 1){
        return false;
    }
    else{
        for($i=2; $i<=sqrt($number);$i++){
            if($number%$i==0){
                return false;
            }
        }
        return true;
    }
}
echo "Enter any number: ";
$number=trim(fgets(STDIN));
if(!is_Prime_Number($number)){
    echo "$number is not a Prime number";
}
else{
    echo "$number is a Prime number";
}
?>
