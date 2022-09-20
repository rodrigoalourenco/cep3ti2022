<?php
interface PessoaDao {
    function inserirPessoa($pessoa);
    function buscaPessoas();
    function buscaPessoa($id);
}