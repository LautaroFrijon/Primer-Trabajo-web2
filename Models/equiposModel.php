<?php

class EquiposModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=futarg;charset=utf8', 'root', '');
    }

    /**
     * Obtiene la lista de tareas dejando en primer lugar las que no fueron finalizadas.
     */
    public function getEquipos() {
        $query = $this->db->prepare('SELECT * FROM equipo ');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getNombreEquipos() {
        $query = $this->db->prepare('SELECT nombre FROM equipo ');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function get($idEquipo) {
        $query = $this->db->prepare('SELECT * FROM equipo WHERE id_equipo = ?');
        $query->execute(array($idEquipo));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function guardar($nombre, $titulos, $descripcion) {
        $query = $this->db->prepare('INSERT INTO equipo(nombre, titulos, descripcion) VALUES(?,?,?)');
        $query->execute([$nombre, $titulos, $descripcion]);
        
        return $this->db->lastInsertId();
    }

    function eliminar($idEquipo){
        $query = $this->db->prepare('DELETE FROM equipo WHERE id_equipo = ?');
        $query->execute([$idEquipo]);
    }

    public function editarEquipo($nombre, $titulos, $descripcion, $id_equipo){
        $query = $this->db->prepare('UPDATE equipo SET nombre=?, titulos=?, descripcion=? WHERE id_equipo=?');
        $query->execute(array($nombre, $titulos, $descripcion, $id_equipo));
    }
}