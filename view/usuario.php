<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/usuario.css">
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
<section id="infosF">
    <?php foreach($usuarios AS $usuario)?>
    <div id="infos">
        <h2 id="infosT">Informações</h2>
        <div id="infosI">
            <p><b>Nome Completo :</b> <?=$usuario->nome. ' ' .$usuario->sobrenome?></p>
            <hr>
            <p><b>Usuário :</b> <?=$usuario->usuario?>  <b>|</b>  <b>E-mail :</b> <?=$usuario->email?></p>
            <hr>
            <p><b>Sexo : </b> <?php
                if ($usuario->sexo == "M") {
                    echo "Masculino";
                } elseif ($usuario->sexo == "F"){
                    echo "Feminino";
                } elseif ($usuario->sexo == "O"){
                    echo "Outro";
                }?></p>
            <hr>
        </div>
    </div>
</section>
</body>
</html>
