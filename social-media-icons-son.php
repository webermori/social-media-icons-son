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
define('PATH', plugin_dir_path(__FILE__));

//Includes
require_once(PATH.'includes/social-media-icons-son-conteudo.php');
require_once(PATH.'includes/social-media-icons-son-opcoes.php');