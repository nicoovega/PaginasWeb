<?php
    $Nombre= $_REQUEST ['Nombre'];
    $contraseña= $_REQUEST ['contraseña'];
    $opciones = $_REQUEST ['Opciones'];
    if ($opciones==0)
    echo "Tu personaje es Homero";
    elseif ($opciones==1)
    echo "Tu personaje es Bart";
    elseif ($opciones==2)
    echo "Tu personaje es Lisa";
    elseif ($opciones==3)
    echo "Tu personaje es Marge";
    elseif ($opciones==4)
    echo "Tu personaje favorito es otro";
    ?>