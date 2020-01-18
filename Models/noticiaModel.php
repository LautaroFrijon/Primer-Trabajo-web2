<?php

class NoticiaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=futarg;charset=utf8', 'root', '');
    }

    /**
     * Obtiene la lista de tareas dejando en primer lugar las que no fueron finalizadas.
     */
    public function getNoticias() {
        $query = $this->db->prepare('SELECT * FROM noticia ');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getNoticia($idNoticia) {
        $query = $this->db->prepare('SELECT * FROM noticia WHERE id_notica = ?');
        $query->execute([$idNoticia]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    function borrar($idNoticia) {
        $query = $this->db->prepare('DELETE FROM noticia WHERE id_notica = ?');
        $query->execute([$idNoticia]); 
    }

    public function guardar($titulo, $fecha, $contenido, $idEquipo, $imagen = null) {
        $filepath = null;
        if ($imagen)
            $filepath = $this->moveFile($imagen);

        $sentencia = $this->db->prepare("INSERT INTO noticia(titulo, fecha, contenido, equipo, imagen) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($titulo, $fecha, $contenido, $idEquipo, $filepath));

        return $this->db->lastInsertId();
    }

    public function guardarSinImagen($titulo, $fecha, $contenido, $idEquipo) {
        $query = $this->db->prepare('INSERT INTO noticia(titulo, fecha, contenido, equipo) VALUES(?,?,?,?)');
        $query->execute([$titulo, $fecha, $contenido, $idEquipo]);
            
        return $this->db->lastInsertId();
    }

    //Mueve la imagen y retorna la ubicacion
    private function moveFile($imagen) {
        $filepath = "img/noticias/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($imagen['tmp_name'], $filepath);
        return $filepath;
    }

    public function obtenerNombreEquipo() {
       $query = $this->db->prepare('SELECT n.*, e.nombre as nombre_equipo FROM noticia n JOIN equipo e  ON e.id_equipo = n.equipo');
       $query->execute();
       return $query->fetchAll(PDO::FETCH_OBJ);
    }
            
    public function editarNoticia($idNoticia, $titulo, $fecha, $contenido, $idEquipo, $imagen){
        $query = $this->db->prepare('UPDATE noticia SET titulo=?, fecha=?, contenido=?, equipo=?, imagen=? WHERE id_notica=?');
        $query->execute(array($titulo, $fecha, $contenido, $idEquipo, $imagen, $idNoticia));
    }

    public function eliminarImagen($idNoticia){
        $query = $this->db->prepare('DELETE imagen FROM noticia WHERE id_notica=?');
        $query->execute([$idNoticia]);
    }

}