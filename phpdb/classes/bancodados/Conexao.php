<?php

class Conexao
{
    public function getConexao()
    {

        $host = 'localhost';
        $port = '3306';
        $dbname = 'teste1';
        $usuario = 'root';
        $senha = '';
    
    
    
        //Conexão com o banco de dados
        $con = new PDO(
            'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname . '',
            $usuario,
            $senha
        );
        
        return $con;
    }
    
}
