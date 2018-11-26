<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bücherliste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://bootswatch.com/4/lux/bootstrap.min.css"/>
    <script src="main.js"></script>
</head>
<body>
    <table>
    <?php
    if($file = fopen("/books.csv","r") !== FALSE){
        $amount = 0;
        echo "<thead>\n<tr>";
        if($head = fgetcsv($file, 1024, ":") !== FALSE){
            $amount = count($head);
            for ($i = 0; $i < $amount; $i++){
                echo "<td>".$head[$i]."</td>";
            }
        }
        echo "</tr>\n</thead>";
        echo "<tbody>\n"
        while($data = fgetcsv($file, 1024, ";") !== FALSE){
            echo "<tr>\n";
            echo "</tr>\n";
        }
        echo "</tbody>\n"
        fclose($file);
    }
    ?>
    </table>
</body>
</html>