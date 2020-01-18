<?php

class comentariosModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=futarg;charset=utf8', 'root', '');
    }

    public function obtenerComentarios(){
        $query = $this->db->prepare('SELECT * FROM comentarios');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerComentario($id){
        $query = $this->db->prepare('SELECT * FROM comentarios WHERE id_comentario = ?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function Borrar($idComentario){
        $query = $this->db->prepare('DELETE * FROM comentarios WHERE id_comentario = ?');
        $query->execute(array($idComentario));
    }
    
    public function guardar($contenido, $puntuacion, $usuario){
        $query = $this->db->prepare('INSERT INTO comentarios(contenido, puntuacion, usuario) VALUES(?,?,?)');
        $query->execute([$usuario, $contenido, $puntuacion]);

        return $this->db->lastInsertId();
    }
    
}