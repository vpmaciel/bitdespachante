<?php
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

echo $DIV_MAIN;

require_once 'menu.php';


echo $H1 . 'Sucesso'  . $H1_; 

echo '<span class="sucesso">' . 'Operação realizada com sucesso !'. '</span>';

if (isset($_GET['msg'])) {
    echo '<br><br><span class="sucesso">' . $_GET['msg']. '</span>';
}

$url = isset($_GET['url_voltar']) ? $_GET['url_voltar'] : '';

if (isset($_GET['url_voltar'])) {
    header( "refresh:5;url= $url.php" );
}

echo $DIV_;

echo $BODY_;

echo $HTML_;