<?php
    require_once '../dao/ClienteDAO.php';
    $clienteDAO = new ClienteDAO();
    $clientes = $clienteDAO->listarClientes();
    // echo var_dump($clientes);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>
<body>
    <h1> Clientes </h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Email</td>
            <td colspan="2">Acões</td>
        </tr>

        <?php
            foreach($clientes as $cliente){
            echo"    <tr>";
            echo"        <td>{$cliente['id_cliente']}</td>";
            echo"        <td>{$cliente['nome']}</td>";
            echo"        <td>{$cliente['cpf']}</td>";
            echo"        <td>{$cliente['email']}</td>";
            echo"        <td> <a href='formEditarCliente.php?id_cliente={$cliente['id_cliente']}'> Editar </a> <td> <a href=''> Excluir </a> </td>";
            echo"    </tr>";
            }

        ?>

    </table>

</body>
</html>