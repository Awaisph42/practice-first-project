<?php
    $table=$_POST['table'];
    $limit=$_POST['limit'];
?>
<html>
    <head>
        <style>
            table, th, td {
                    border: 1px solid black;
                    margin-left:500px;

            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>S:NO</td>
                <td>TABLE OF <?php echo $table;?> IS</td>
                            
            </tr>
            <tr>
                    
                <?php for($i=1;$i<=$limit;$i++){
                ?>
                <tr>
                    <td><?php echo $i;echo'<br/>';?></td>
                    <td><?php echo $table.'*'.$i."=".$table*$i;echo"<br/>";} ?></td>    
                </tr>   
            
                
            </tr>
        </table>
    </body>
</html>
