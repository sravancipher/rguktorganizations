<HTML><BODY>
<FORM method=get action="que7.php">
Enter first value: <INPUT type=text name="a"><br>
Enter second value:<INPUT type=text name="b"><br>
<INPUT type=submit value=”Calculate”>
</FORM></BODY></HTML>
<?php

function add(){
    $a=$_GET["a"];
    $b=$_GET["b"];
    echo "addition ".$a+$b ."<br>";
}
function sub(){
    $a=$_GET["a"];
$b=$_GET["b"];
    echo "subtraction ".$a-$b."<br>";
}
function mul(){
    $a=$_GET["a"];
$b=$_GET["b"];
    echo "multiplication ".$a*$b."<br>";
}
function div(){
    $a=$_GET["a"];
$b=$_GET["b"];
    echo "division ".$a/$b."<br>";
}
add();
sub();
mul();
div();
?>