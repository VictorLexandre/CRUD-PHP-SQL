<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a785a1723d.js" crossorigin="anonymous"></script>
</head>
<body>
<section>
    <div id="menuF">
        <ul id="menu">
            <li id="menuI"><h1 id="menuT">Crud MySql</h1></li>
            <li id="menuI"><a id="voltar" href="../"><i class="fas fa-arrow-left"></i> Voltar </a></li>
        </ul>
    </div>
</section>
<section>
    <div id="tabela">
        <center><a href="./?act=create" class="btn btn-primary">Novo Usuário <i class="fas fa-plus"></i></a></center>
        <table style="text-align: center" class="table table-light table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Usuário</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Sexo</th>
                <th scope="col">E-mail</th>
                <th scope="col">. . .</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuario AS $usuarios) { ?>
            <tr>
                <th scope="row"><?=$usuarios->id?></th>
                <td><?=$usuarios->usuario?></td>
                <td><?=$usuarios->nome?></td>
                <td><?=$usuarios->sobrenome?></td>
                <td><?=$usuarios->sexo?></td>
                <td><?=$usuarios->email?></td>
                <td id="acoes">
                    <a href="./?act=usuario&id=<?=$usuarios->id?>" type="button" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="./?act=update&id=<?=$usuarios->id?>" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="./?act=delete&id=<?=$usuarios->id?>" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
