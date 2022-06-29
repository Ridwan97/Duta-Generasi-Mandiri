<?php 	
$input = "Masyallah";
echo $input."<br>";
    $output=count_chars($input, 1);
    foreach($output as $key => $input){
        echo(chr($key)." : ".$input."<BR />");
    }


 ?>