<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PROCESSA CONTACTES</h1>
    <table style='border-collapse:collapse'>
        <?php
        $file = fopen("contactes31.txt", "r");
        $file2 = fopen("contactes31b.txt","w");    
        while(! feof($file)) {
            echo "<tr>";
            $line = fgets($file);
            $dats = explode(",",$line);
            for($i = 0; $i<=3; $i++){
                if($i == 0 ){
                    echo "<td style= 'border: 1px solid black; padding:20px;'>".$dats[$i]."</td>";
                    fwrite($file2, $dats[$i]);
                }else{
                    echo "<td style= 'border: 1px solid black; padding:20px;'>".$dats[$i]."</td>";
                    fwrite($file2,"#".$dats[$i]);
                }
            }
        }
        
        fclose($file);
        fclose($file2);
        ?>
    </table>
</body>
</html>