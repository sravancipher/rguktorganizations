<?php
$name = "Sravan"; 
$name = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$name); 
echo $name; 
?>