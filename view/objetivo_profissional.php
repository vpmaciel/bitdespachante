<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
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

$FORM = '<form action="../controller/objetivo_profissional.php" method="get">';
echo $FORM;
if (isset($_GET['objetivo_profissional_model'])) {
	$objetivo_profissional_model_get = $_GET['objetivo_profissional_model'];
}

echo $TABLE;
echo $TR . $TH . 'Objetivo Profissional'  . $TH_ . $TR_; 

$objetivo_profissional_model['obj_pro_id'] = isset($_GET['objetivo_profissional_model']) ? $objetivo_profissional_model_get['obj_pro_id'] : '';
$INPUT = '<input type="hidden" name="obj_pro_id"  value="' . $objetivo_profissional_model['obj_pro_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_;
$objetivo_profissional_model['obj_pro_cargo'] = isset($_GET['objetivo_profissional_model']) ? $objetivo_profissional_model_get['obj_pro_cargo'] : '';
$CARGO = '<input type="text" name="obj_pro_cargo" required minlength="10" maxlength="50" value="' . $objetivo_profissional_model['obj_pro_cargo'] .'">';
echo $TR. $TD . $CARGO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pretensão salarial' . $LABEL_ . $TD_ . $TR_;
echo $TR. $TD;
$SELECT = '<select name="obj_pro_pretensao_salarial">';
echo $SELECT;
foreach ($array_pretensao_salarial as $indice => $obj_pro_pretensao_salarial) {		
	echo ($indice == $objetivo_profissional_model_get['obj_pro_pretensao_salarial']) ? "<option value=$indice selected>$obj_pro_pretensao_salarial</option>" : "<option value=$indice>$obj_pro_pretensao_salarial</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Contrato' . $LABEL_ . $TD_ . $TR_;
echo $TR. $TD;
$SELECT = '<select name="obj_pro_contrato">';
echo $SELECT;
foreach ($array_contrato as $indice => $obj_pro_contrato) {	
	echo ($indice == $objetivo_profissional_model_get['obj_pro_contrato']) ? "<option value=$indice selected>$obj_pro_contrato</option>" : "<option value=$indice>$obj_pro_contrato</option>";
}
echo $SELECT_ . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;