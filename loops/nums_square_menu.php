<?php
$number=$_POST['number'];
$square=$_POST['square'];
for($i=1;$i<$square;$i++){
    $number=$number+$_POST['number'];
}
echo "THE ".$square." TIMES ADDITION OF THE " .$_POST['number']." IS  ".$number;
?>



