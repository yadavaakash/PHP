<?php
// Associative Array
// Key = Value
// Method 1
echo "<br> Method 1 ";

$a['Z'] = "Zero";
$a[80] = 10;
$a['A'] = "Aakash";
$a["PHP"] = "Website Development";
echo "<br>==================================================================</br>";
// Method 2
echo "<br> Method 2 ";
$a = array(
    "Z" => "Zero",
    10 => 10,
    "A" => "Aakash",
    50 =>  50.50,
    "PHP" => "Website Development"
);
echo "PHP is used for ".$a['PHP'];
echo "<br>==================================================================</br>";

// Foreach Loop
echo "<br>";
echo "<br> Foreach Loop 1 ";
echo "<br>";
foreach($a as $key => $value){
    echo "<br> $value";
}

echo "<br>==================================================================</br>";
// Foreach Loop
echo "<br>";
echo "<br> Foreach Loop 2 ";
echo "<br>";
foreach($a as $key => $value){
    echo "<br> Key is $key and Value is $value";

}
echo "<pre>";
print_r($a);
var_dump($a);
var_export($a);

echo "<br>======================================================================</br>";
?>