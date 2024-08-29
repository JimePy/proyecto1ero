<?php
/*Datos que vienen de formulario*/
header("Content-Type: application/json");
$fecha = $_POST["fecha"];
$foto = $_POST["foto"];
$nombre = $_POST["nombre"];
$contenido = $_POST["contenido"];
/*"SELECT id, nombre, contenido,foto, fecha, autor FROM articulos" */
/*Creo la conexion con mis datos de base de datos */
$conexion = new mysqli("localhost", "root", "", "proyecto1");
/*Creo el código SQL con lo que vino por post*/
$sql="INSERT INTO articulos(nombre, contenido, foto, fecha, autor) VALUES ('$nombre','$contenido','$foto','$fecha', 1) ";
/*Ejecuto ese query*/
$conexion->query($sql);
#El query es "consulta", para ejecutar la base de datos 
if ($conexion->insert_id > 0) {
    echo json_encode([
        "respuesta" => "ok"
    ]);
}else{
    echo json_encode([
        "respuesta" => "error"
    ]);
}
/*Cierro la conexion*/ 
$conexion->close();

/*
$ejecutar = $conexion->query($sql);
$res= [
    "respuesta" => "ok"
];
if ($ejecutar->insert_id == 0){
    $res["respuesta"] ="error";
}
    echo json_decode($res); */