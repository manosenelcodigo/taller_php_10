<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Creación de un documento TXT desde PHP</title>
    </head>
    <body>
        
        <?php
        $datos = file('datos.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        for($i=0;$i<sizeof($datos);$i++)
        {
            $campos=explode(';',$datos[$i]);
            for($j=0;$j<sizeof($campos);$j++)
            {
                echo $campos[$j];
                 echo "<br />";
            }
            echo "<hr />";
        }
        ?>
        
    </body>
    </html>
