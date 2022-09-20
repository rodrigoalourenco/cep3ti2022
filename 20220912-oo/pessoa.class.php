<?php
    class Pessoa {

        private $nome;
        private $dataNasc;
        
        private $cnpj;

        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getDataNasc() {
            return $this->dataNasc;
        }

        function setDataNasc($dataNasc) {
            $this->dataNasc = $dataNasc;
        }

        

        function getCnpj() {
            return $this->cnpj;
        }

        function setCnpj($cnpj)  {
            $this->cnpj = $cnpj;
        }
    }
?>

