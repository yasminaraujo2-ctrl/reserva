<?php
include("../includes/cabecalho.php");
include("formulario.php");
include("../includes/rodape.php");
if(isset($_POST['nome'], $_POST['patrimonio'])){
    $item= new item();
    $item->nome= $_POST['nome'];
    $item->descricao =  $_POST['descricao'];
    $item->Patrimonio =  $_POST['patrimonio'];

    echo "<pre>";
    print_r($item);
    echo "</pre>";
}