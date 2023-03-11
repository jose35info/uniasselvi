<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Ola mundo!!</h1>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td colspan="">Cadastro de Funcionario</td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td> <input type="text" name="nome"> </td>
            </tr>
            <tr>
                <td>Cargo:</td>
                <td> <input type="text" name="Cargo"></td>
            </tr>
            <tr>
                <td>Descrição de Cargo:</td>
                <td> <textarea name="descgargo" cols="15" rows="15"></textarea> </td>
            </tr>
            <tr>
                <td>Setor:</td>
                <td><input type="text" name="setor"></td>
            </tr>
            <tr>
                <td>Salario:</td>
                <td><input type="text" name="salario"></td>
            </tr>
        </table>
        <br><br>
        <input type="submit" name="Gravar">
    </form>
    
</body>
</html>