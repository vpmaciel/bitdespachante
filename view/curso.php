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
echo $H1 . 'CURSO' . $H1_;

$FORM = '<form action="../controller/curso.php" method="get">';

echo $FORM;
if (isset($_GET['curso_model'])) {
	$curso_model_get = $_GET['curso_model'];
}
echo $TABLE;

$curso_model['cur_int_id'] = isset($_GET['curso_model']) ? $curso_model_get['cur_int_id'] : '';
$INPUT = '<input type="hidden" name="cur_int_id"  value="' . $curso_model['cur_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Nome do curso' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_char_nome'] = isset($_GET['curso_model']) ? $curso_model_get['cur_char_nome'] : '';
$INPUT = '<input type="text" name="cur_char_nome" required size="70" minlength="1" maxlength="50" value="' . $curso_model['cur_char_nome'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_char_instituicao'] = isset($_GET['curso_model']) ? $curso_model_get['cur_char_instituicao'] : '';
$INPUT = '<input type="text" name="cur_char_instituicao" required size="70" minlength="1" maxlength="50" value="' . $curso_model['cur_char_instituicao'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de início' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_year_ano_inicio'] = isset($_GET['curso_model']) ? $curso_model_get['cur_year_ano_inicio'] : '';
$INPUT = '<input type="number" name="cur_year_ano_inicio" required size="70" min="1950" max="3000" value="' . $curso_model['cur_year_ano_inicio'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de conclusão' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_year_ano_conclusao'] = isset($_GET['curso_model']) ? $curso_model_get['cur_year_ano_conclusao'] : '';
$INPUT = '<input type="number" name="cur_year_ano_conclusao" size="70" min="1950" max="3000" value="' . $curso_model['cur_year_ano_conclusao'] .'">';
echo $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Situação' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="cur_int_situacao">';
echo $SELECT;
foreach ($array_situacao as $indice => $cur_int_situacao) {	
	echo ($indice == $curso_model_get['cur_int_situacao']) ? "<option value=$indice selected>$cur_int_situacao</option>" : "<option value=$indice>$cur_int_situacao</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="cur_int_nivel">';
echo $SELECT;
foreach ($array_escolaridade as $indice => $cur_int_nivel) {	
	echo ($indice == $curso_model_get['cur_int_nivel']) ? "<option value=$indice selected>$cur_int_nivel</option>" : "<option value=$indice>$cur_int_nivel</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;