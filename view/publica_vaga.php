<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
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
echo $H1 . 'PUBLICAR VAGA' . $H1_;

$FORM = '<form action="../controller/publica_vaga.php" method="get">';

echo $FORM;
if (isset($_GET['publica_vaga_model'])) {
	$publica_vaga_model_get = $_GET['publica_vaga_model'];
}

echo $TABLE;


$publica_vaga_model['pub_vag_int_id'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_int_id'] : '';
$INPUT = '<input type="hidden" name="pub_vag_int_id"  value="' . $publica_vaga_model['pub_vag_int_id'] .'">';
echo $INPUT;

$publica_vaga_model['pub_vag_char_data_publicacao'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_char_data_publicacao'] : '';
$INPUT = '<input type="hidden" name="pub_vag_char_data_publicacao"  value="' . $publica_vaga_model['pub_vag_char_data_publicacao'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Empresa' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_char_empresa'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_char_empresa'] : '';
$INPUT = '<input type="text" name="pub_vag_char_empresa" required size="70" minlength="1" maxlength="50" value="' . $publica_vaga_model['pub_vag_char_empresa'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_char_cargo'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_char_cargo'] : '';
$INPUT = '<input type="text" name="pub_vag_char_cargo" required size="70" minlength="1" maxlength="50" value="' . $publica_vaga_model['pub_vag_char_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Requisitos' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_char_requisitos'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_char_requisitos'] : '';
$TEXTAREA = '<textarea id="pub_vag_char_requisitos" name="pub_vag_char_requisitos" rows="2" cols="50" maxlength="500">' . $publica_vaga_model['pub_vag_char_requisitos'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Funções' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_char_funcoes'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_char_funcoes'] : '';
$TEXTAREA = '<textarea id="pub_vag_char_funcoes" name="pub_vag_char_funcoes" rows="2" cols="50" maxlength="500">' . $publica_vaga_model['pub_vag_char_funcoes'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Benefícios' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_char_beneficios'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_char_beneficios'] : '';
$TEXTAREA = '<textarea id="pub_vag_char_beneficios" name="pub_vag_char_beneficios" rows="2" cols="50" maxlength="500">' . $publica_vaga_model['pub_vag_char_beneficios'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Vagas' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_int_vagas'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_int_vagas'] : '';
$INPUT = '<input type="number" name="pub_vag_int_vagas" required size="70" min="1" max="1000" value="' . $publica_vaga_model['pub_vag_int_vagas'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Contrato' . $LABEL_ . $TD_ . $TR_;	 
echo $TR. $TD;
$SELECT = '<select name="pub_vag_int_contrato">';
echo $SELECT;
foreach ($array_contrato as $indice => $pub_vag_int_contrato) {	
	echo ($indice == $objetivo_profissional_model_get['pub_vag_int_contrato']) ? "<option value=$indice selected>$pub_vag_int_contrato</option>" : "<option value=$indice>$pub_vag_int_contrato</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Salário mensal (R$)' . $LABEL_ . $TD_ . $TR_; 
$publica_vaga_model['pub_vag_int_salario_mensal'] = isset($_GET['publica_vaga_model']) ? $publica_vaga_model_get['pub_vag_int_salario_mensal'] : '';
$INPUT = '<input type="text" name="pub_vag_int_salario_mensal" required size="70" value="' . $publica_vaga_model['pub_vag_int_salario_mensal'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pub_vag_int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $pub_vag_int_estado) {	
	echo ($indice == $objetivo_profissional_model_get['pub_vag_int_estado']) ? "<option value=$indice selected>$pub_vag_int_estado</option>" : "<option value=$indice>$pub_vag_int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pub_vag_int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $pub_vag_int_cidade) {	
	echo ($indice == $objetivo_profissional_model_get['pub_vag_int_cidade']) ? "<option value=$indice selected>$pub_vag_int_cidade</option>" : "<option value=$indice>$pub_vag_int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;