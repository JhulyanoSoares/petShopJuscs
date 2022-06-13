<?php

    class Cliente{

        private $id;
        private $nome;
        private $nacionalidade;
        private $cpf;
        private $email;
        private $telefone;
        private $rua;
        private $numero;
        private $cidade;
        private $complemento;

        public function __construct($nome = NULL, $nacionalidade = NULL, $cpf = NULL, 
        $email = NULL, $telefone = NULL, $rua = NULL, $numero = NULL, $cidade = NULL, 
        $complemento = NULL){
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->rua = $rua;
            $this->numero = $numero;
            $this->cidade = $cidade;
            $this->complemento = $complemento;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getNacionalidade()
        {
                return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade)
        {
                $this->nacionalidade = $nacionalidade;

                return $this;
        }

        public function getCpf()
        {
                return $this->cpf;
        }

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        public function getRua()
        {
                return $this->rua;
        }

        public function setRua($rua)
        {
                $this->rua = $rua;

                return $this;
        }
        
        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        public function getCidade()
        {
                return $this->cidade;
        }

        public function setCidade($cidade)
        {
                $this->cidade = $cidade;

                return $this;
        }

        public function getComplemento()
        {
                return $this->complemento;
        }

        public function setComplemento($complemento)
        {
                $this->complemento = $complemento;

                return $this;
        }

    }

?>
