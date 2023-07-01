<?php
$file = "sra1.txt"; 
$lines = count(file($file)); 
if($lines>1){
    echo "There are $lines lines in $file\n"; 
}
else{
    echo "There is $lines line in $file\n"; 
}

$dir = "lab10"; 
if (mkdir($dir)) { 
    echo "The directory was created"; 
} else {
    echo "There is an error in creating directory";
}