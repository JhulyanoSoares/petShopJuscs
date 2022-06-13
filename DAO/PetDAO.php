<?php
include_once 'Conexao.php';
include_once '../model/PetModel.php';

    class PetDAO{

        public static function inserir($pet){
            $sql = "INSERT INTO pet (nome, tutor, raca, idade, infoad) VALUES"
            ."('".$pet->getNome()."','".$pet->getTutor()."','".$pet->getRaca()."','".$pet->getIdade()."','".$pet->getInfoad()."');";
            Conexao::executar($sql);
        }
        
        public static function buscar(){
            $sql = "SELECT id, nome, tutor, raca, idade, infoad FROM pet ORDER BY nome";
            $result = Conexao::consultar($sql);
            $lista = new ArrayObject();
            if($result != null){
                while(list($_id, $_nome, $_tutor, $_raca, $_idade, $_infoad) = mysqli_fetch_row($result)){
                    $pet = new Pet();
                    $pet->setId($_id);
                    $pet->setNome($_nome);
                    $pet->setTutor($_tutor);
                    $pet->setRaca($_raca);
                    $pet->setIdade($_idade);
                    $pet->setInfoad($_infoad);
                    $lista->append($pet);
                }
            }
            return $lista;
        }

        public static function buscarPorId($id){
            $sql = "SELECT id, nome, tutor, raca, idade, infoad FROM pet WHERE id=".$id;
            $result = Conexao::consultar($sql);
            if($result != null){
                list($_id, $_nome, $_tutor, $_raca, $_idade, $_infoad) = mysqli_fetch_row($result);
                    $pet = new Pet();
                    $pet->setId($_id);
                    $pet->setNome($_nome);
                    $pet->setTutor($_tutor);
                    $pet->setRaca($_raca);
                    $pet->setIdade($_idade);
                    $pet->setInfoad($_infoad);
            }
            return $pet;
        }

        public static function editar($pet){
            $sql = "UPDATE pet SET "
                    ."nome = '".$pet->getNome()."',"
                    ."tutor = '".$pet->getTutor()."',"
                    ."raca = '".$pet->getRaca()."',"
                    ."idade = '".$pet->getIdade()."',"
                    ."infoad = '".$pet->getInfoad()."'"
                    ."WHERE id = ".$pet->getId();
                    echo ($sql);
            Conexao::executar($sql);
        }

        public static function excluir($id){
            $sql = "DELETE FROM pet WHERE id=".$id;
            echo $sql;
            Conexao::executar($sql);
        }
    }

?>