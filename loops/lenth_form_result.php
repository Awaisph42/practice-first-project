<?php
$number=$_POST['even_num'];
//$odd=$_POST['odd_num'];
//$limit=3;
$countt_number="0";
$even_number_add="0";
$exict_number="0";
$odd_number_add="0";
// $new=strlen($lenght);
// echo "THE LENGTH OF THE ( ".$lenght." ) IS : ".$new;

// for($x=0; $x<$new; $x++){ 
   
//   if(  $lenght[$x] ==  $count )
//      $countt++;
    
    
	
//   }
//  echo " NUMBER OF TOTAL ALPHABETS ( ".$count." ) IN ( ".$lenght." ) IS " .$countt;

for( $i=1; $i<=$number; $i++ ){ 
    if($i%2==0){ 
      
      $even_number_add+= strlen($countt_number);
      
    }
    if($i%2==1){ 
      $odd_number_add+= strlen($countt_number);
    }
      if($number%$i==0){
       $exict_number.=("<br/>".$i);
       
        
      }
      
    }
echo "THE TOTAL EVEN NUMBERS ARE FROM 0 TO ".$number." IS ".$even_number_add;
echo"<br/>";
echo"<br/>";


echo "THE TOTAL ODD NUMBERS ARE FROM 0 TO ".$number." IS ".$odd_number_add;
echo"<br/>";
echo"<br/>";
echo"THE TOTAL DIVISER OF ".$number." IS";
echo"<br/>";
echo $exict_number;
echo"<br/>";








?>