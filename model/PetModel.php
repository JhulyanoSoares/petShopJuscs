<?php

    class Pet{

        private $id;
        private $nome;
        private $tutor;
        private $raca;
        private $idade;
        private $infoad;

        public function __construct($nome = NULL, $tutor = NULL, $raca = NULL, $idade = NULL, $infoad = NULL){
            $this->nome = $nome;
            $this->tutor = $tutor;
            $this->raca = $raca;
            $this->idade = $idade;
            $this->infoad = $infoad;
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

        public function getTutor()
        {
                return $this->tutor;
        }

        public function setTutor($tutor)
        {
                $this->tutor = $tutor;

                return $this;
        }

        public function getRaca()
        {
                return $this->raca;
        }

        public function setRaca($raca)
        {
                $this->raca = $raca;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        public function getInfoad()
        {
                return $this->infoad;
        }

        public function setInfoad($infoad)
        {
                $this->infoad = $infoad;

                return $this;
        }

    }

?>