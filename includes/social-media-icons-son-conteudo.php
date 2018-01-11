<?php

function smis_plugin_registrando_conteudo($post){
    echo $post."Lorem ipsum";
}

add_filter('the_content','smis_plugin_registrando_conteudo');