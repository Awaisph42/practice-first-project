<?php
$numm=15;
$tablee=2;

function assigment1($num,$table){
        for($i=3;$i<$num;$i++){
        
        $result=$table*$i;
        echo $table. " * ".$i." = ". $result;
        echo "<br/>";
        $table++;
        echo "<br/>";
        }
        echo "<hr>";
        echo "<hr>";    
}
function assigment2($num){
        for($i=1;$i<$num;$i++){
            $result=$i*$i;
            echo "<br/>";
            echo $i." * ".$i." = ".$result;
            echo "<br/>";
        }
        echo "<hr>";
        echo "<hr>";
}
function assigment3($num){
        for($i=1;$i<=$num;$i++){
            if($i%2==0){
                echo "PRIME NUMBER  ". $i;
                echo "<br/>";
            }
        }
        echo "<hr>";
        echo "<hr>";
}
function assigment4($num){
        for($i=1;$i<=$num;$i++){
            if($i%2==1){
                echo "ODD NUMBER  ".$i;
                echo "<br/>";
            }
        }
        echo "<hr>";
        echo "<hr>";
}
function assigment5($num){
        for($i=99;$i<1000;$i+=100){
                echo $i;
                echo "<br/>";
                echo "<br/>";
            
        }
        echo "<hr>";
        echo "<hr>";
}
function assigment6($num){
        for($i=4;$i<100;){
               
            echo $i;
            echo "<br/>";
            $total=$i+$i;
            echo $total;
            $total+=2;
            echo "<br/>";
            echo "<br/>";
            $i=$total;
            }
        echo "<hr>";
        echo "<hr>";   
}   
function assigment7($num){
        for($i=9;$i>0;$i-=2){
            echo $i;
            echo "<br/>";
            echo "<br/>";
            $add=$i;
            $total=$i+3;
            echo $total;
            echo "<br/>";
            echo "<br/>";
        } 
        echo "<hr>";
        echo "<hr>";   
}  
function assigment8($num){
        for($i=16;$i<30;$i+=3){
            echo $i;
            echo "<br/>";
            echo "<br/>";
            $total=$i+6;
            echo $total;
            echo "<br/>";
            echo "<br/>";
        } 
        echo "<hr>";
        echo "<hr>";    
}    
function assigment9($num){
        for($i=4;$i<210;){
            echo $i;
            echo "<br/>";
            echo "<br/>";
            $total=$i*3;
            echo $total;
            echo "<br/>";
            $total =$total+4;
        
            $i=$total;
            echo "<br/>";
            echo "<br/>";
        }    
}       
   
assigment1($numm,$tablee);
assigment2($numm);
assigment3($numm);
assigment4($numm);
assigment5($numm);
assigment6($numm);
assigment7($numm);
assigment8($numm);
assigment9($numm);


?>