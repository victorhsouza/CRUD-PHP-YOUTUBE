<?php
    require_once '../dao/ClienteDAO.php';
    $clienteDAO = new ClienteDAO();
    $idCliente = $_GET['id_cliente'];
    $cliente = $clienteDAO->listarClienteById($idCliente);
     echo var_dump($cliente);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" id="" value="<?php  echo $cliente['nome']  ?>">
        </div>

        <div>
            <label for="">CPF</label>
            <input type="text" name="cpf" id="" value="<?php  echo $cliente['cpf']  ?>">
        </div>

        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="" value="<?php  echo $cliente['email']  ?>">
        </div>

        <div>
            <input type="submit" value="cadastrar">
        </div>


    </form>
</body>
</html>