<?php
session_start();
require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

echo $DIV_MAIN;

require_once 'menu.php';

$FORM = '<form action="../controller/login.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TH . 'Login'  . $TH_ . $TR_; 

echo $TR . $TD . $LABEL . 'E-mail' . $LABEL_ . $TD_ . $TR_; 
$usuario['usu_email'] = isset($_POST['usu_email']) ? $_POST['usu_email']:'';
$INPUT = '<input type="email" name="usu_email" required minlength="5" maxlength="100" value="' . $usuario['usu_email'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Senha' . $LABEL_; 
$usuario['usu_senha'] = isset($_POST['usu_senha']) ? $_POST['usu_senha']:'';
$INPUT = '<input type="password" name="usu_senha" placeholder="0000" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $usuario['usu_senha'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="ENVIAR" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

$LINK = '<a href="recupera_senha.php">Esqueci usuário ou senha</a>';
echo $TD . $LINK . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;