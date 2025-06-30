<?php
include_once './config/config.php';
include_once './classes/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario($db);
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Lidar com o upload da foto
    $foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $novo_nome = uniqid('foto_') . '.' . $extensao;
        $diretorio = 'uploads/';

        // Certificar-se de que o diretório existe
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);
        }

        // Mover o arquivo para o diretório de uploads
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio . $novo_nome)) {
            $foto = $diretorio . $novo_nome;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Usuário</title>
</head>

<body>
    <h1>Adicionar Usuário</h1>
    <!-- registrar.php -->
    <form method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label>Sexo:</label>
        <label for="masculino">
            <input type="radio" id="masculino" name="sexo" value="M" required> Masculino
        </label>
        <label for="feminino">
            <input type="radio" id="feminino" name="sexo" value="F" required> Feminino
        </label>
        <br><br>
        <label for="fone">Fone:</label>
        <input type="text" name="fone" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br><br>
        <label for="foto">Foto:</label>
        <input type="file" name="foto" accept="image/*">
        <br><br>
        <input type="submit" value="Adicionar">
    </form>

</body>

</html>