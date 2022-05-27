<?php
include_once 'Conexao.php';
include_once '../model/CidadeModel.php';

    class CidadeDAO{

        public static function inserir($cidade){
            $sql = "INSERT INTO cidade (nome, id_estado, id_pais, cep) VALUES"
            ."('".$cidade->getNome()."','".$cidade->getEstado()."','"
            .$cidade->getPais()."','".$cidade->getCep()."');";
            Conexao::executar($sql);
        }

        public static function buscar(){
            $sql = "SELECT id, nome, id_estado, id_pais, cep FROM cidade ORDER BY nome";
            $result = Conexao::consultar($sql);
            $lista = new ArrayObject();
            if($result != null){
                while(list($_id, $_nome, $_estado, $_pais, $_cep) = mysqli_fetch_row($result)){
                    $cidade = new Cidade();
                    $cidade->setId($_id);
                    $cidade->setNome($_nome);
                    $cidade->setEstado($_estado);
                    $cidade->setPais($_pais);
                    $lista->append($cidade);
                }
            }
            return $lista;
        }

        public static function buscarPorId($id){
            $sql = "SELECT id, nome, id_estado, id_pais, cep FROM estado WHERE id=".$id;
            $result = Conexao::consultar($sql);
            if($result != null){
                list($_id, $_nome, $_estado, $_pais, $_cep) = mysqli_fetch_row($result);
                    $cidade = new Cidade();
                    $cidade->setId($_id);
                    $cidade->setNome($_nome);
                    $cidade->setEstado($_estado);
                    $cidade->setPais($_pais);
                    $cidade->setCep($_cep);
            }
            return $cidade;
        }

        public static function editar($cidade){
            $sql = "UPDATE cidade SET "
                    ."nome = '".$cidade->getNome()."',"
                    ."id_estado = '".$cidade->getEstado()."',"
                    ."id_pais = '".$cidade->getPais()."'"
                    ."cep = '".$cidade->getCep()."'"
                    ."WHERE id = ".$cidade->getId();
                    echo ($sql);
            Conexao::executar($sql);
        }

    }

?>