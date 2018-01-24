<?php 
$smis_opcoes = get_option('smis_op_icons');
//print_r($smis_opcoes);
?>

<?php if(!$smis_opcoes['fb_hide'] || !$smis_opcoes['tw_hide'] || !$smis_opcoes['yt_hide']):?>

<style>
</style>
<div class="smis-conteudo">
    Me encontre nas redes sociais:
    <hr>
    <?php $smis_opcoes = get_option('smis_op_icons');?>
    <div class="smis-icones">
    <?php if(!$smis_opcoes['fb_hide']):?>
        <a href="<?php echo $smis_opcoes['fb_perfil']; ?>">Facebook</a>
    <?php endif; ?>
    <?php if(!$smis_opcoes['tw_hide']):?>
        <a href="<?php echo $smis_opcoes['tw_perfil']; ?>">Twitter</a>
    <?php endif; ?>
    <?php if(!$smis_opcoes['yt_hide']):?>
        <a href="<?php echo $smis_opcoes['yt_perfil']; ?>">Instagram</a>
    </div>
    <?php endif; ?>
</div>

<?php endif;?>