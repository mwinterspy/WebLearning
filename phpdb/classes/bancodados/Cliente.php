<?php
    require 'Conexao.php';
    require 'model/ClienteModel.php';


    class Cliente{

        private $conexao;

        public function __construct()
        {
           $conec = new Conexao();
           $this->conexao = $conec->getConexao();
        }

        private function mapear($q)
        {
            $listadecliente = [];
            foreach($q as $dados){
                $cliente = new ClienteModel();
                $cliente->id = $dados['id'];
                $cliente->nome = $dados['nome'];
                $cliente->gen = $dados['sexo'];
                $cliente->dataNascimento = $dados['nascimento'];
                $listadecliente[] = $cliente;
            }

            return $listadecliente;
        }

        public function listar()
        {
            $sql = "select * from cliente limit 10";
            $q = $this->conexao->prepare($sql);
            $q->execute();
            return $this->mapear($q);
        }

        

        
    }




?>