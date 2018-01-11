<?php

/*
Plugin Name: Social Media Icons - SON
Description: Lorem ipsun dolor siamet!
Version: 0.1
Author: Weber Mori
Author URI: htp://www.webermori.com.br
*/

//Medidas de segurança
if (!defined('ABSPATH')) {
    exit("Acesso negado!");
}

//Define a constante do diretório absoluto
define('SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN', plugin_dir_path(__FILE__));

//Includes
require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icons-son-conteudo.php');
require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icons-son-opcoes.php');