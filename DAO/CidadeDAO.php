<?php

    class CidadeDAO{

        public function inserir($cidade){
            $sql = "INSERT INTO cidade (nome, id_estado, id_pais, cep) VALUES"
            ."('".$cidade->getNome()."','".$cidade->getEstado()."','"
            .$cidade->getPais()."','".$cidade->getCep()."');";
            Conexao::executar($sql);
        }

        public static function buscar(){
            $sql = "SELECT id, nome, id_estado, id_pais, cep FROM estado ORDER BY nome";

    }

?>