<?php

    class Estado{

        private $id;
        private $nome;
        private $uf;
        private $pais;

        public function __construct($nome = NULL, $uf = NULL, $pais = NULL){
            $this->nome = $nome;
            $this->uf = $uf;
            $this->pais = $pais;
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

        public function getUf()
        {
                return $this->uf;
        }

        public function setUf($uf)
        {
                $this->uf = $uf;

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

    }

?>