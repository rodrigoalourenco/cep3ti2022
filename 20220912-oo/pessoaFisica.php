<?php

    class PessoaFisica extends Pessoa {
        private $cpf;

        function getCpf() {
            return $this->cpf;
        }

        function setCpf($cpf)  {
            $this->cpf = $cpf;
        }
    }

