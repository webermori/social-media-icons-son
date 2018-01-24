<?php

function smis_plugin_registrando_conteudo($post){
    echo $post;
    require_once(PATH.'includes\templates\conteudo.php');
}

add_filter('the_content','smis_plugin_registrando_conteudo');