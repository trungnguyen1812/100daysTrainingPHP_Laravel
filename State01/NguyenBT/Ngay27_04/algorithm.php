<!--
 PHP: Mảng (array) và các hàm xử lý mảng cơ bản
 php : array and handler fuction basic  
Thuật toán: Kiểm tra chuỗi palindrome 
Algorithm : palindrome string test
giải thích thuật toán : là 1 loại chuỗi đọc từ trước ra sau và từ sau ra trước điều có 1 kết quả 
Algorithm explannation : is a type  string  that is read them same from font to back 
-->
<?php
//method 1 
function checkPalindorme($array)
{
    return  strrev($array);
}

//method 2 
function checkPalindormeMethod2($array){
    $result = '';
    $lenght = strlen($array);
    for ($i= $lenght -1; $i <= 0; $i--) { 
        $result .= $array[$i];// $result =  $result . $array[$i];
    }
    return $result;
}

$output = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palindrome = $_POST["palindrome"];
    if (isset($palindrome) && !empty($palindrome)) {
        $output =  checkPalindorme($palindrome);
        if ($palindrome == $output) {
            echo"This string is palidrome :" , $output;
        }else {
            echo"This string not palidrome #### :" , $output;
        }
    }else {
        echo"Please enter palidrome test!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngay 27/4</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="palindrome">
        <button type="submit">Palidrome</button>
    </form>
    <?php if ($output): ?>
        <p>Result : <?php echo($output);?></p>
    <?php endif ?>
</body>

</html>