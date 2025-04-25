<!-- Thuật toán: Kiểm tra số chẵn/lẻ và số nguyên tố -->
<?php
function isPrime($n)
{
   if($n < 2 ) return false;
   for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) return false;
   }
   return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $typeNumber = $_POST["number"];
   if ($typeNumber % 2 == 0) {
      echo "The number intered is even: " . htmlspecialchars($typeNumber) . "<br>";
   } else {
      echo "post function not working !!" .htmlspecialchars($typeNumber). "<br>";
   }

   // check prinme 

   if (isPrime($typeNumber)) {
      echo"It is also a prime number :" , $typeNumber;
   }else{
      echo"It iss not a prime number :" , $typeNumber;
   } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>day 24/4</title>
</head>

<body>
   <form action="" method="POST">
      <input type="number" name="number">
      <button type="submit">Check type number </button>
   </form>
</body>

</html>