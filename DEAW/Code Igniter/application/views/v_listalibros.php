<?php
    //Le llega $libros (array de objetos libro) y $numerada (boolean) y $cantLibros
    
    echo "<p>$cantLibros</p>";

    echo "<ol>";
    foreach ($libros as $libro) {
        $enlace = site_url()."/c_listado/verLibro/$libro->idlibro";
        echo "<li><a href='$enlace'>".$libro->titulo."</a></li>";
    }

    echo "</ol>";
?>

