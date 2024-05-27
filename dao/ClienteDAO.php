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


        public function listarClientes(){
            try{
                $conexao = Conexao::conexao();

                $sql = "select id_cliente,nome,cpf, email from cliente";
                $stmt = $conexao->prepare($sql);
                $clientes =  $stmt->execute();
                $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $clientes;
            }catch(PDOException $exc){
                echo $exc->getMessage();
                return false;
            }


        }

        public function listarClientebyId($idCliente){
            try{
                $conexao = Conexao::conexao();
                $sql = "select id_cliente,nome,cpf, email from cliente where id_cliente = :id_cliente";

                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(":id_cliente", $idCliente);
                $cliente = $stmt->execute();
                $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
                return $cliente;

            }catch(PDOException $exc){
                echo $exc->getMessage();
            }
        }


        public function excluirCliente(){
            $conexao = Conexao::conexao();
        }



        
    }


?>