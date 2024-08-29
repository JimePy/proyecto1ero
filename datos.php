<?php
$conexion = new mysqli(
    "localhost", "root","", "proyecto1");

$sql = "SELECT id, nombre, contenido, fecha, autor FROM articulos";

$conexion->query($sql);
