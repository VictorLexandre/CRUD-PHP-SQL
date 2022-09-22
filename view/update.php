<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/update.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a785a1723d.js" crossorigin="anonymous"></script>
</head>
<body>
<section>
    <div id="menuF">
        <ul id="menu">
            <li id="menuI"><h1 id="menuT">Crud MySql</h1></li>
            <li id="menuI"><a id="voltar" href="./"><i class="fas fa-arrow-left"></i> Voltar</a></li>
        </ul>
    </div>
</section>
<section id="formF">
    <div id="form">
        <h2 id="formT">Formulário / Atualizar</h2>
        <form action="" method="post">
            <?php foreach ($usuario AS $usu) { ?>
            <div>
                <label id="lbl" for="nome">Nome :</label>
                <input class="form-control" name="nome" id="nome" type="text" value="<?=$usu->nome?>" maxlength="80" required>
            </div>
            <br>
            <div>
                <label id="lbl" for="sobrenome">Sobrenome :</label>
                <input class="form-control" name="sobrenome" id="sobrenome" type="text" value="<?=$usu->sobrenome?>" maxlength="80" required>
            </div>
            <br>
            <div>
                <label id="lbl" for="usuario">Usuário :</label>
                <input class="form-control" name="usuario" id="usuario" type="text" value="<?=$usu->usuario?>" maxlength="60" required>
            </div>
            <br>
            <div>
                <label id="lbl" for="email">E-mail :</label>
                <input class="form-control" name="email" id="email" type="email" value="<?=$usu->email?>" maxlength="120" required>
            </div>
            <br>
            <div>
                <label id="lbl" for="senha">Senha :</label>
                <input class="form-control" name="senha" id="senha" type="text" maxlength="10" required>
            </div>
            <br>
            <div>
                <label id="lbl" for="sexo">Sexo :</label>
                <select class="form-select" name="sexo" id="sexo" required>
                    <option value=""></option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </div>
            <br>
            <div id="botoes">
                <button id="formBtn" style="margin-right: 10%" class="btn btn-success" type="submit">Alterar</button>
                <button id="formBtn" style="margin-left: 10%" class="btn btn-danger" type="reset">Limpar</button>
            </div>
            <?php } ?>
        </form>
    </div>
</section>
</body>
</html>
