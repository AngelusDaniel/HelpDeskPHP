<?php
/*

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    //remover indicies do array de sessão
    //unset()

    unset($_SESSION["teste"]); // remove o indicie apenas se existir
    

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    //destruir a variável de sessão
    //session_destroy()

    session_destroy(); //sessão será destruida
    //forçar um redirecionamento

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
*/
session_start();
session_destroy();
header("Location: index.php");
?>