<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $email = md5($_POST['email']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$nome' AND senha='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION['usuario'] = $usuario;
        header('Location: ferias.html');
    }else{
        $error = "Usuario ou senha invalidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logint</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class='login'>
    <div class="container" style="width: 400px;">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="usuario">Usuario:</label>
            <input type="text" name="nome" required>
            <label for="senha">Senha:</label>
            <input type="password" name="email" required>
            <button type="submit" style="margin-bottom:30px;">Entrar</button>
            <?php if(isset($error)) echo "<p class='message error'>$error</p>"; ?>
        </form>
    </div>
</body>
</html>