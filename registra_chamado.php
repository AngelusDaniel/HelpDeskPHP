<?php

    session_start();

    //montagem do texto
    $titulo = str_replace("#", "-", $_POST['titulo']);
    $categoia = str_replace("#", "-", $_POST['categoria']);
    $descricao = str_replace("#", "-", $_POST['descricao']);

    //implode("#", $_POST)

    $texto = $_SESSION["id"] . "#" . $titulo ."#". $categoia ."#".$descricao.PHP_EOL;    
    
    //abrindo o arquivo
    $arquivo = fopen("../../helpAppHelpDesk/arquivo.hd", "a");
    //escrevendo no arquivo o texto
    fwrite($arquivo, $texto);
    //fecjando o arquivo
    fclose($arquivo);

    header("Location: abrir_chamado.php");

    //echo $texto;
?>