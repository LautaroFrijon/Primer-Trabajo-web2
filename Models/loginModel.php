<?php

class UsuarioModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=futarg;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el email pasado.
     */
    public function getByUsername($email) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute(array($email));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getusuarios(){
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function AsignarAdmin($id){
        $sentencia =  $this->db->prepare("UPDATE usuario SET  admin=1 WHERE id_usuario=?");
        $sentencia->execute(array($id));
    }

    public function sacarAdmin($id){
        $sentencia =  $this->db->prepare("UPDATE usuario SET  admin=0 WHERE id_usuario=?");
        $sentencia->execute(array($id));
    }

    public function guardarUsuario($email, $hash) {
        $query = $this->db->prepare('INSERT INTO usuario(email, password) VALUES(?,?)');
        $query->execute([$email, $hash]);
        
        return $this->db->lastInsertId();
    }

    function borrar($idUsuario){
        $sentencia = $this->db->prepare('DELETE FROM usuario WHERE id_usuario=?');
        $sentencia->execute([$idUsuario]);
        var_dump($sentencia);
    }
}