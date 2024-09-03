<?php
$cor = $_GET["id"];  //recebe a cor escolhida pelo usuário
setcookie("corperso", "$cor", time()+172800); //cria um cookie chamado corperso, armazena no cookie a cor escolhida pelo usuário e faz com que o cookie dure 2 dias.
header ("Location:index.php"); //recarrega a página index.php
?>
