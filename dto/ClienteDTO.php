<?php
    class ClienteDTO{
        private $nome;
        private $cpf;
        private $email;

        
        /**
         * Get the value of nome
         */
        public function getNome() {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self {
                $this->nome = $nome;
                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail() {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self {
                $this->email = $email;
                return $this;
        }

        /**
         * Get the value of cpf
         */
        public function getCpf() {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         */
        public function setCpf($cpf): self {
                $this->cpf = $cpf;
                return $this;
        }
    }


?>