<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['senha']);

echo '<h3> Esperamos vc de volta! </h3>';

echo '<br>';

echo '<h4> <a href="home.php"> Voltar para a tela principal </a> </h4>';

//header('Location: index.php');

