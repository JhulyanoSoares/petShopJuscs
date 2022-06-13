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
            $sql = "SELECT c.id, c.nome, c.id_estado, e.nome, e.uf, e.id_pais, p.nome, p.sigla, c.cep" 
                    ." FROM cidade c,estado e, pais p"
                    ." WHERE e.id = c.id_estado AND p.id = e.id_pais"
                    ." ORDER BY c.nome";
            $result = Conexao::consultar($sql);
            $lista = new ArrayObject();
            if($result != null){
                while(list($_id, $_nome, $_idEstado, $_nomeEstado, $_ufEstado, $_idPais, $_nomePais, $_siglaPais, $_cep)
                 = mysqli_fetch_row($result)){
                    $pais = new Pais();
                    $pais->setId($_idPais);
                    $pais->setNome($_nomePais);
                    $pais->setSigla($_siglaPais);
        
                    $estado = new Estado();
                    $estado->setId($_idEstado);
                    $estado->setNome($_nomeEstado);
                    $estado->setUf($_ufEstado);
                    $estado->setPais($pais);
                            
                    $cidade = new Cidade();
                    $cidade->setId($_id);
                    $cidade->setNome($_nome);
                    $cidade->setEstado($estado);
                    $cidade->setPais($pais);
                    $cidade->setCep($_cep);
                    $lista->append($cidade);
                }
            }
            return $lista;
        }

        public static function buscarPorId($id){
            $sql = "SELECT id, nome, id_estado, id_pais, cep FROM cidade WHERE id=".$id;
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
                    ."id_pais = '".$cidade->getPais()."',"
                    ."cep = '".$cidade->getCep()."'"
                    ."WHERE id = ".$cidade->getId();
                    echo ($sql);
            Conexao::executar($sql);
        }

        public static function excluir($id){
            $sql = "DELETE FROM cidade WHERE id=".$id;
            Conexao::executar($sql);
        }

    }

?>