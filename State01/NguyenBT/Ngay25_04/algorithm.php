<!-- Đảo ngược chuỗi không dùng hàm có sẵn -->
<?php
    function reverseStr($string) {
        $result = '';
        $length = strlen($string);
        
        for ($i = $length - 1; $i >= 0; $i--) {
            $result .= $string[$i];
        }
        
        return $result;
    }

    $output = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra đầu vào
        $str = $_POST["EnterString"];
        if (isset($str) && !empty($str)) {
            $output = reverseStr($str);
        } else {
            $output = "Please enter string before check!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đảo ngược chuỗi - 25/4</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="EnterString" placeholder="Enter string to reverse ">
        <button type="submit">Reverse</button>
    </form>
    <?php if ($output): ?>
        <p>Result: <?php echo htmlspecialchars($output); ?></p>
    <?php endif; ?>
</body>
</html>