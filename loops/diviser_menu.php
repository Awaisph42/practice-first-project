<?php
$number=$_POST['number'];
echo"THE TOTAL DIVISER OF ".$number." IS";
echo"<br/>";
for($i=1;$i<=$number;$i++){
    if($number%$i==0){
        echo $i;
        echo"<br/>";
    }
}

?>
