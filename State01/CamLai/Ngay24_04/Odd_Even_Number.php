<?php
echo "Enter any numbermber: ";
$number = trim(fgets(STDIN));
if($number%2==0){
    echo "$number is even number";
}
else{
    echo "$number is odd numbernumber";
}
?>