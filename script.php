<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" width="200px" height="auto">
    <?php
        $j = 0;
        $somma= 0;
        for($i = 0 ;$i<100;$i+= 3){

            $j ++;
            $somma += $i ;
            $media = $somma/$j;
            echo "<tr><td> $i </td></tr>";
                
        }
        echo "<tr><td> Numero di Multipli: $j </td></tr>";
        echo "<tr><td> Media: $media </td></tr>";
    ?>
    </table>
    
</body>
</html>