
<?php

// $num=12;
// $num1=12;



  

  
//   // while( $num1 <= $NumCountt ){
  
  
  
//   //  echo $num1;
//   //      if( $num1 ==  $NumCountt){
         
//   //        echo "<br>";
//   //        $NumCountt--;
//   //        $num1 =1;
//   //      }else{
//   //        $num1++;
//   //      }
//   //    }
//  for($i=1;$i<=$num;$i++){
  
// for($k=1;$k<=$num1;){
//  echo $k;
// //  echo "<br/>";
//   if($k==$num1){
//     echo "<br/>";
//     $num1--;
    
//   }
//   else{
//     $k++;
//   }
  
// }}
 


function looppractice($a,$b){

  for($i=0;$i<$a;$i++){

    echo "outer loop => ".$i;
    echo "<br>";
    for($y=0;$y<$b;$y++){

      echo "&nbsp;&nbsp;&nbsp;second  Inner loop => ".$y." ";
      echo "<br>";
      for($z=0;$z<5;$z++){
      
          echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;third  Inner loop => ".$z." ";
      }
      echo "<br>";
    }
    
    echo "<br>";

}
}
//looppractice(5,5);
  
// function looppractice_1($a,$b){
  
//   for($i=0;$i<=$a;$i++){

//     echo $i;
//     echo "<br>";
//     for( $j=0; $j <= $a; $j++){
//       echo $j;

//         $a=$i;
//     }
//     echo "<br>";
//   }
// }
   
// looppractice_1(5,5);


//swapping

$a=3;
$b=2;

echo "THE VALUE OF A IS ".$a;
echo " <br/>";
echo "THE VALUE OF B IS ".$b;
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo " <br/>";
echo " <br/>";
echo " AFTER SWAPING THE VALUE OF A IS ".$a;
echo " <br/>";
echo " AFTER SWAPING THE VALUE OF B IS ".$b;


?>