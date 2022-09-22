<?php

class Usuario_Controller
{
    public function all() {
        $obj = new Usuario();

        $usuario = $obj->all();

        include 'view/home.php';
    }

    public function create() {

        $obj = new Usuario();

        if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['sexo'])) {
            $obj->setUsuario($_POST['usuario']);
            $obj->setNome($_POST['nome']);
            $obj->setSobrenome($_POST['sobrenome']);
            $obj->setEmail($_POST['email']);
            $obj->setSenha($_POST['senha']);
            $obj->setSexo($_POST['sexo']);

            $obj->create();

        }

        include "view/cadastro.php";
    }

    public function read() {

        $obj = new Usuario();

        if (isset($_GET['id'])) {
            $obj->setId($_GET['id']);
            $usuarios = $obj->read();

        } else {
            header("Location: ./");
        }

        include "view/usuario.php";
    }

    public function update() {

        $obj = new Usuario();

        if (isset($_GET['id'])) {

            $obj->setId($_GET['id']);
            $usuario = $obj->read();

            if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['sexo']) && isset($_GET['id'])){
                $obj->setId($_GET['id']);
                $obj->setNome($_POST['nome']);
                $obj->setSobrenome($_POST['sobrenome']);
                $obj->setUsuario($_POST['usuario']);
                $obj->setEmail($_POST['email']);
                $obj->setSenha($_POST['senha']);
                $obj->setSexo($_POST['sexo']);

                $obj->update();
            }
        } else {
            header("Location: ./");
        }

        include "view/update.php";
    }

    public function delete() {

        if (isset($_GET['id'])) {
            $obj = new Usuario();
            $obj->setId($_GET['id']);

            $obj->delete();

        } else {
            header("Location: ./");
        }
    }
}