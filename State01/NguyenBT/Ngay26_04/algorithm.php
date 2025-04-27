<!-- Thuật toán: Tìm số Fibonacci thứ n -->
<?php
    function findFibonacci($n){
        if ($n < 0) {
            echo"Please enter number greater than 0 !!!";
        }elseif ($n == 0) {
            echo"Number fibonacci is : " , 0;
        }elseif ($n == 1) {
            echo"Number fibonacci is : " , 1;
        }

        $a = 0;
        $b = 1;
        for ($i=2; $i <= $n; $i++) { 
           $temp = $b;
           $b =  $a + $b;
           $a = $temp;
        }
        return $b;
    }
    $output = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $localtionNumber = $_POST["fibonacci"];
        if (isset($localtionNumber) && !empty($localtionNumber)) {
           $output = findFibonacci($localtionNumber);
        }else{
            echo"Please enter number befor check fibonacci!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngay 26/4</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="fibonacci" placeholder="Enter find number fibonacci location n" style="width: 20%;">
        <button type="submit">Enter number</button>
    </form>
    <?php if($output):?>
        <p>Result :  <?php echo($output); ?></p>
    <?php endif; ?>
</body>
</html>