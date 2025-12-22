<?php
$tables_no=$_POST['table'];
$range=$_POST['range'];
   

for($i=1;$i<=$tables_no;$i++){
        echo "the table of (". $i. " )is";
        
        for($k=1;$k<=$range;$k++){
            $add=$i*$k; 
            echo $i."*". $k."=".$add;
            echo "<br/>";
        }
        echo"<br/>"; 
        echo"<br/>"; 
        echo"<br/>"; 
}

?>