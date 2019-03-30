<?php

foreach ($dados as $usuario):

    ?>
    <br>ID: </b><?=$usuario['id']?><br>
    <br>Nome: </b><?=$usuario['nome']?><br>
    <br>Email: </b><?=$usuario['email']?><br>

    <a href = "?rota=usuarios/alterar/<?usuario['id']?>">ALTERAR</a>|
    <a href = "?rota=usuarios/excluir/<?usuario['id']?>">EXCLUIR</a>
    <hr>
<?php
endforeach
?>