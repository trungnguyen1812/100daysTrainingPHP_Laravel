// Idea 1: Using max function
<?php
$array=[10,2,8,7,6];
$result=max($array);
echo "Max number is ".$result;
?>

// Idea 2: Using loops
<?php
$array=[10,2,100,200,5];
$max=$array[0];
foreach($array as $number){
    if($number > $max){
        $max=$number;
    }
}
echo "Max number is: ".$max;
?>

// Idea 3: Using 