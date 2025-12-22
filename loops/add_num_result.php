<?php
$start=$_POST['start'];
$end=$_POST['end'];
$num=0;
for($value=$start; $value<=$end; $value++){
   $num+=$value;
}
echo "ADDITION OF NUMBERS FROM ". $start." TO ". $end ." IS " . $num;
?>
