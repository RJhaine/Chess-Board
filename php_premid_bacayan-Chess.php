<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>

<style>
    .outline{
        width: 500px;
        height: 395px;
        border: 3px solid #000;
    }
    table{
        width: 100%;
        cellspacing:0px;
        text-align:center;
    }
    table td{
        cellspacing:0px;
    }
    table td.col:nth-child(even){
        color: white;
        background: black;
    }
    table td.evenrow:nth-child(odd){
        color: white;
        background: black;
    }

</style>
</head>
<body><center>

<div class="outline">
    <div class="container">
        <table>
            <?php 
                
                $black_position = array('R','K', 'B','Q','W','B','K','R');

                for($col = 1; $col <= 8; $col++) {
                    echo "<tr>";
                    $value = $col;
            
                    for($row = 1; $row <= 8; $row++) {

                        $pawn = "P";
                    

                        // FIRST ROW
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px >";
                            echo $black_position[0];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px >";
                            echo $black_position[1];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px>";
                            echo $black_position[2];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px >";
                            echo $black_position[3];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px >";
                            echo $black_position[4];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px>";
                            echo $black_position[5];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px >";
                            echo $black_position[6];
                            echo "</td>";
                        }
                        if($value == 1 && $row == 1){
                            echo "<td class=col height=45px width=45px >";
                            echo $black_position[7];
                            echo "</td>";
                        }

                        // SECOND ROW
                        if($value == 2){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $pawn;
                            echo "</td>";
                        }
                        
                        // THIRD ROW
                        if($value == 3){
                            echo "<td class=col height=45px width=45px>";
                            echo "</td>";
                        }

                        // 4th ROW
                        if($value == 4){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo "</td>";
                        }

                        // 5th ROW
                        if($value == 5){
                            echo "<td class=col height=45px width=45px >";
                            echo "</td>";
                        }
                        // 6th ROW
                        if($value == 6){
                            echo "<td class=evenrow height=45px width=45px>";
                            echo "</td>";
                        }
                        // 7th ROW
                        if($value == 7){
                            echo "<td class=col height=45px width=45px >";
                            echo $pawn;
                            echo "</td>";
                        }
                 

                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[0];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[1];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[2];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[3];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[4];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px>";
                            echo $black_position[5];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[6];
                            echo "</td>";
                        }
                        if($value == 8 && $row == 8){
                            echo "<td class=evenrow height=45px width=45px >";
                            echo $black_position[7];
                            echo "</td>";
                        }
                    }
                    echo "</tr>";
                } 
            ?>
        </table>
    </div>
</div>
</body>
</html>