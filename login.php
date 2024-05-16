<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'head-html.php' ?>
<body>
    <main>
        <div class="div-form">
        <?php require_once 'logo-html.php' ?>
            <form action="main.php" class="form">
                <label class="label-form" for="">Email:</label>
                <input class="input-form" type="text" name="email">
                <label class="label-form" for="">Senha:</label>
                <input class="input-form" type="text" name="password">
                <button class="btn-form">Entrar</button>
            </form>
            <p>Não tem uma conta ainda? <a href="register-user.php">Cadastre-se!</a></p>
        </div>
    </main>
<?php require_once 'end-html.php' ?>