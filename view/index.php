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

$MSG = '<p align="justify">O Bit Despachante é um sistema para internet para serviços de despachante que gerencia e controla as informações da sua empresa.</p>';	
echo $MSG;

$MSG = '<p align="justify">Maciel Tecnologia da Informação é uma empresa de tecnologia da informação que oferece sistemas profissionais em todo o Brasil para auxiliar sua empresa 
			no gerenciamento de informações e suporte a tomada de decisões. Oferecemos suporte técnico a sua empresa no horário comercial.</p>';	
echo $MSG;

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;