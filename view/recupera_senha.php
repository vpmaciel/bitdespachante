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

$FORM = '<form action="../controller/recupera_senha.php" method="post">';

echo $FORM;

echo $TABLE;
echo $TR . $TH . 'Recuperar Senha'  . $TH_ . $TR_; 

echo $TR . $TD . $LABEL . 'E-mail (Você receberá a senha neste e-mail)' . $LABEL_ . $TD_ . $TR_; 
$usuario['usu_email'] = isset($_POST['usu_email']) ? $_POST['usu_email']:'';
$INPUT = '<input type="email" name="usu_email" required minlength="5" maxlength="100" value="' . $usuario['usu_email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Enviar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;