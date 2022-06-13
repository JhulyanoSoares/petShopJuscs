<?php
include_once 'Conexao.php';
include_once '../model/ClienteModel.php';

    class ClienteDAO{

        public static function inserir($cliente){
            $sql = "INSERT INTO cliente (nome, nacionalidade, cpf, email, telefone, rua, numero, id_cidade, complemento) VALUES"
            ."('".$cliente->getNome()."','".$cliente->getNacionalidade()."','".$cliente->getCpf()."','".$cliente->getEmail()."',
            '".$cliente->getTelefone()."','".$cliente->getRua()."','".$cliente->getNumero()."','".$cliente->getCidade()."',
            '".$cliente->getComplemento()."');";
            Conexao::executar($sql);
        }
        
        public static function buscar(){
            $sql = "SELECT l.id, l.nome, l.nacionalidade, l.cpf, l.email, l.telefone, l.rua, l.numero, l.id_cidade, l.complemento,
            c.nome, c.id_estado, c.id_pais, c.cep" 
                    ." FROM cliente l, cidade c"
                    ." WHERE c.id = l.id_cidade"
                    ." ORDER BY l.nome";
            $result = Conexao::consultar($sql);
            $lista = new ArrayObject();
            if($result != null){
                while(list($_id, $_nome, $_nacionalidade, $_cpf, $_email, $_telefone, $_rua, $_numero, $_idCidade, $_complemento, 
                $_nomeCidade, $_estadoCidade, $_paisCidade, $_cepCidade)
                 = mysqli_fetch_row($result)){
                    $cidade = new Cidade();
                    $cidade->setId($_idCidade);
                    $cidade->setNome($_nomeCidade);
                    $cidade->setEstado($_estadoCidade);
                    $cidade->setPais($_paisCidade);
                    $cidade->setCep($_cepCidade);

                    $cliente = new Cliente();
                    $cliente->setId($_id);
                    $cliente->setNome($_nome);
                    $cliente->setNacionalidade($_nacionalidade);
                    $cliente->setCpf($_cpf);
                    $cliente->setEmail($_email);
                    $cliente->setTelefone($_telefone);
                    $cliente->setRua($_rua);
                    $cliente->setNumero($_numero);
                    $cliente->setCidade($cidade);
                    $cliente->setComplemento($_complemento);
                    $lista->append($cliente);
                }
            }
            return $lista;
        }

        public static function buscarPorId($id){
            $sql = "SELECT id, nome, nacionalidade, cpf, email, telefone, rua, numero, id_cidade, complemento FROM cliente 
            WHERE id=".$id;
            $result = Conexao::consultar($sql);
            if($result != null){
                list($_id, $_nome, $_nacionalidade, $_cpf, $_email, $_telefone, $_rua, $_numero, $_cidade, $_complemento) = 
                mysqli_fetch_row($result);
                    $cliente = new Cliente();
                    $cliente->setId($_id);
                    $cliente->setNome($_nome);
                    $cliente->setNacionalidade($_nacionalidade);
                    $cliente->setCpf($_cpf);
                    $cliente->setEmail($_email);
                    $cliente->setTelefone($_telefone);
                    $cliente->setRua($_rua);
                    $cliente->setNumero($_numero);
                    $cliente->setCidade($_cidade);
                    $cliente->setComplemento($_complemento);
            }
            return $cliente;
        }

        public static function editar($cliente){
            $sql = "UPDATE cliente SET "
                    ."nome = '".$cliente->getNome()."',"
                    ."nacionalidade = '".$cliente->getNacionalidade()."',"
                    ."cpf = '".$cliente->getCpf()."',"
                    ."email = '".$cliente->getEmail()."',"
                    ."telefone = '".$cliente->getTelefone()."',"
                    ."rua = '".$cliente->getRua()."'."
                    ."numero - '".$cliente->getNumero()."',"
                    ."id_cidade = '".$cliente->getCidade()."',"
                    ."complemento = '".$cliente->getComplemento()."'"
                    ."WHERE id = ".$cliente->getId();
                    echo ($sql);
            Conexao::executar($sql);
        }

        public static function excluir($id){
            $sql = "DELETE FROM cliente WHERE id=".$id;
            Conexao::executar($sql);
        }

    }
    
?>