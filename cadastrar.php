<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" type="text/css" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Formulário de cadastro</title>
</head>
<body>

    <div class="card">

        <div class="central">
            <header>
                <div class="titulo">Cadastrar</div>
            </header>

            <form method="POST" action="inserirnobd.php">

                <input type="text" name="nome" size="40" maxlength="60" placeholder="Nome completo:">
                <br>

                <input type="text" name="cell" size="40" maxlength="60" placeholder="Celular (Whatsapp):">
                <br>

                <input type="text" name="cnpj" size="40" maxlength="60" placeholder="Cnpj:">
                <br>

                <input type="email" name="email" size="40" maxlength="60" placeholder="Email:">
                <br>

                <input type="password" name="senha" size="40" maxlength="60" placeholder="Senha:">
                <br>

                <input type="password" name="confsenha" size="40" maxlength="60" placeholder="Confirmar senha:">
                <br>

                <input type="submit" value="Finalizar" id ="enviar">
            </form>
        </div>
    </div>
    </body>
    </html>
    