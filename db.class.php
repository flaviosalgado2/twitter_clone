<?php

class db
{
    //dados de conexao com o banco
    private $host = 'localhost';
    private $usuario = 'root';
    private  $senha = '';
    private  $database = 'twitter_clone';

    public function conecta_mysql(){

        //cria a conexao com o banco
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($con, 'uft-8');

        //verificando erro de conexao
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o banco de dados! Erro = '.mysqli_connect_error();
        }

        return $con;
    }
}

?>