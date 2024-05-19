<?php
    require_once 'conexao/Conexao.php';

    class ClienteDAO{

        public function cadastrarCliente(ClienteDTO $clienteDTO){
            try{
                $conexao = Conexao::conexao();

                $nome = $clienteDTO->getNome();
                $cpf = $clienteDTO->getCpf();
                $email = $clienteDTO->getEmail();
    
                $sql = "insert into cliente (nome,cpf,email) 
                values(:nome, :cpf, :email)
                ";
    
                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":cpf", $cpf);
                $stmt->bindParam(":email", $email);
    
                $stmt->execute();
                return true;
            }catch(PDOException $exc){
                echo $exc->getMessage();
                return false;
            }

        }


        public function listarCliente(){
            $conexao = Conexao::conexao();
        }


        public function excluirCliente(){
            $conexao = Conexao::conexao();
        }
    }


?>