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
require_once 'menu.php';
echo $DIV_MAIN;
echo $H1 . 'SUCESSO' . $H1_;

echo $TABLE;

echo $TR . $TD . '<p class="sucesso">' . 'Operação realizada com sucesso !'. '</p>'  . $TD_ . $TR_;

if (isset($_GET['msg'])) {
    echo $TR . $TD . '<p class="sucesso">' . $_GET['msg']. '</p>'  . $TD_ . $TR_;
}

echo $TABLE_;

echo $DIV_;

echo $BODY_;

echo $HTML_;