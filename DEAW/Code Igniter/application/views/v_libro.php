<?php

//'libro' Objeto con propiedades idlibro, titulo, paginas, genero, nombre as autor
//'fechas' Array de objetos con propiedad fecha

echo "<h1>$libro->titulo</h1>";
echo "<p>$libro->paginas páginas, género: $libro->genero, autor: $libro->autor</p>";

echo "<h3>Fechas prestadas</h3>";
foreach ($fechas as $fecha) {
    echo "<p>$fecha->fecha</p>";
}