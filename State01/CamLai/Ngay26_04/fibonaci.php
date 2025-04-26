/*
 1. Dãy Fibonacci là gì?
Dãy Fibonacci là một dãy số thỏa mãn:

Số đầu tiên: F(0) = 0

Số thứ hai: F(1) = 1

Các số sau: F(n)=F(n−1)+F(n−2)
(Tức là: mỗi số bằng tổng hai số trước đó.)

Ví dụ: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...

*/

// Cách 1: Đệ quy (recursion) Cham Vai Noi

// Cách 2: Vòng lặp (dùng biến)
<?php
function fibonacci($n){
    if($n==0){
        return 0;
    }
    if($n==1){
        return 1;
    }
    $f0=0;
    $f1=1;
    for($i=2; $i<=$n; $i++){
        $fn=$f0+$f1;
        $f0=$f1;
        $f1=$fn;
    }
    return $f1;
}
    echo fibonacci(7);
?>