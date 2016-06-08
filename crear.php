<?php
//acá creamos el archivo
$archivo=fopen("datos.txt","w");

    for($i=0;$i<100;$i++)
    {
        fputs($archivo,"México_$i ; Chile_$i ; España_$i ; Colombia_$i ; Venezuela_$i ; Bolivia_$i");
        fputs($archivo,"  \n");
    }
    fclose($archivo);
//acá comprimimos el archivo a .zip
require_once("zipfile.php");
$nombre="reporte_".date("h:i:s")."_".date("d-m-Y").".zip";
$zipfile=new zipfile();
$zipfile->add_file(implode("",file("datos.txt")), "datos.txt");
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=$nombre");
echo $zipfile->file();
