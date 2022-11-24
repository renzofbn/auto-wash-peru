<?php
    function resaltar_enlace_dropdown($ruta) {
        // Operador ternario
        // (condicion) ? 'ValorV' : 'ValorF';
        return request()->routeIs($ruta) ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle';
    }

    function resaltar_enlace_nav_link($ruta) {
        // Operador ternario
        // (condicion) ? 'ValorV' : 'ValorF';
        return request()->routeIs($ruta) ? 'nav-link active' : 'nav-link';
    }
?>
