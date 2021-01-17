<?php
session_start();

setlocale(LC_ALL, 'pt_BR.utf8');

require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

require_once 'menu.php';

echo $DIV_MAIN;

echo $H1 . 'Bit Despachante' . $H1_;

$MSG = retornar_contador_visitas();	
echo $MSG;

$MSG = '<p align="justify">O Bit Curriculos é um sistema para internet para serviços de depachante.</p>';	
echo $MSG;

$MSG = '<p align="justify">A empresa Maciel Tecnologia da Informação oferece sistemas profissionais em todo o Brasil para auxiliar sua empresa 
			no gerenciamento de informações.</p>';	
echo $MSG;

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;