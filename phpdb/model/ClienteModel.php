<?php
    class ClienteModel{

        public $id;
        public $nome;
        public $gen;
        public $dataNascimento;



        public function genFormatado()
        {
            $gendescricao = '';
            switch($this->gen){
                case 'M':
                    $gendescricao = 'Masculino';
                    break;
                case 'F':
                    $gendescricao = 'Feminino';
                    break;
            }
            
            return $gendescricao;

        }

        public function horaFormat(){
            $timestamp = strtotime($this->dataNascimento);
            $dataNascimento = date('d/m/Y', $timestamp);
            return $dataNascimento;
        }



    }








?>