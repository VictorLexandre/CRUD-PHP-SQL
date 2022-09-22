<?php

class Usuario
{
    private $id;
    private $nome;
    private $sobrenome;
    private $usuario;
    private $email;
    private $senha;
    private $sexo;

    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all() {
        $sql = $this->con->prepare("SELECT * FROM usuarios ORDER BY id");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create() {
        $sql = $this->con->prepare("SELECT * FROM usuarios WHERE usuario =?");
        $sql->execute([$this->getUsuario()]);

        if ($sql->rowCount() > 0) {

            echo "<script>window.alert('Usuário já cadastrado !!')</script>";

        } else {
            $sql = $this->con->prepare("INSERT INTO usuarios(usuario, nome, sobrenome, sexo, email, senha) VALUES(?,?,?,?,?,?)");
            $sql->execute([$this->getUsuario(), $this->getNome(), $this->getSobrenome(), $this->getSexo(), $this->getEmail(), sha1($this->getSenha())]);

            if ($sql->errorCode() != '00000') {
                echo $sql->errorInfo()[2];
            } else {

                echo "<script>window.alert('Usuário cadastrado com sucesso!!')</script>";

            }
        }
    }

    public function read() {
        $sql = $this->con->prepare("SELECT * FROM usuarios WHERE id =?");
        $sql->execute([$this->getId()]);
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function update() {
        $sql = $this->con->prepare("UPDATE usuarios SET usuario =?, nome =?, sobrenome =?, sexo =?, email =?, senha =? WHERE id =?");
        $sql->execute([$this->getUsuario(), $this->getNome(), $this->getSobrenome(), $this->getSexo(), $this->getEmail(), sha1($this->getSenha()), $this->getId()]);

        if ($sql->errorCode() != '00000') {
            echo $sql->errorInfo()[2];
        } else {

            echo "<script>window.alert('Usuário alterado com sucesso!!')</script>";

        }
    }

    public function delete() {
        $sql = $this->con->prepare("DELETE FROM usuarios WHERE id =?");
        $sql->execute([$this->getId()]);

        if ($sql->errorCode() != '00000') {
            echo $sql->errorInfo()[2];
        } else {

            header("Location: ./");

        }
    }


/*----------------------------------------------------------------------------------------------------------------------*/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}