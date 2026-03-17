<style>
    .ativo{
        background-color: orange;
        border-radius: 2px;
        padding: 5px 5px;
        color: white;
    }

    .inativo{
        background-color: purple;
        border-radius: 2px;
        padding: 5px 5px;
        color: white;
    }
</style>

<?php
    $nivelAcesso = 1;

    if ($nivelAcesso == 2){
        echo '<span class="ativo">Administrador</span>';
    }else{
        echo '<span class="inativo">Usuario comum</span>';
    }
?>