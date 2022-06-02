<?php

    class Cidade{

        private $id;
        private $nome;
        private $estado;
        private $pais;
        private $cep;

        public function __construct($nome = NULL, $estado = NULL, $pais = NULL, $cep = NULL){
            $this->nome = $nome;
            $this->estado = $estado;
            $this->pais = $pais;
            $this->cep = $cep;
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

        public function getEstado()
        {
                return $this->estado;
        }

        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        public function getPais()
        {
                return $this->pais;
        }

        public function setPais($pais)
        {
                $this->pais = $pais;

                return $this;
        }

        public function getCep()
        {
                return $this->cep;
        }

        public function setCep($cep)
        {
                $this->cep = $cep;

                return $this;
        }

    }

?>
