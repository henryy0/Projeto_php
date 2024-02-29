<?php

include_once('Login/autenticar.php');

?>
<div class="col-sm-10 p-5" style="background-color: darkgrey;">
    <h1>TOPO do SITE</h1>
</div>
<div class="col-sm-2 " style="background-color: darkgrey;">
    <p>ID: <?=$idUsuarioSessao?><br>
    Nome: <?=$nomeUsuarioSessao?><br>
    Login: <?=$loginUsuarioSessao?><br></p>
    <a href="Login/Logoff.php" class="btn btn-danger">Sair</a>
</div>
       