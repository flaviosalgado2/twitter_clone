<?php

session_start();

if (!$_SESSION['usuario']) {
    header('Location: index.php?erro=1');
}

require_once('db.class.php');

$nome_pessoa = $_POST['nome_pessoa'];
$id_usuario = $_SESSION['id_usuario'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "select * from usuarios where usuario like '%$nome_pessoa%' and id <> $id_usuario";

//echo $sql;

$resultado_id = mysqli_query($link, $sql);

//echo $resultado_id;

if ($resultado_id) {
    while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        echo '<a href="#" class="list-group-item"';
        echo '<strong>' . $registro['usuario'] . '</strong> <small> - ' . $registro['email'] . ' </small>';
        echo '<p class="list-group-item-text pull-right">';
          echo '<button type="button" class="btn btn-default btn-seguir" data-id_usuario="'.$registro['id'].'">Seguir</button>';
        echo '</p>';
        echo '<div class="clearfix"></div>';
        echo '</a>';
    }
} else {
    echo 'Erro no banco';
}
