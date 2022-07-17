<?php 

function pr( $a_Object, $b_Type=true )
{
    if( $b_Type )
    {
        ?><pre><?php print_r( $a_Object ) ?></pre><?php
    }
    else
    {
        var_dump( $a_Object );
    }
}

require_once "controladores/rutas.controlador.php";
require_once "controladores/cursos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/cursos.modelo.php";

$rutas= new ControladorRutas();
$rutas->inicio();




?>