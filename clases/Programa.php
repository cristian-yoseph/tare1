<?php
namespace Clases;
use Clases\ConexionDB as db;

require_once "config/autoload.php";

class Programa
{
    private $nombre;
    private $id_facultad;

    public function getNombre():string
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getIdFacultad():int
    {
        return $this->id_facultad;
    }

    public function setIdFacultad($id_facultad): void
    {
        $this->id_facultad = $id_facultad;
    }

    public function verProgramas() {
        try {
            $db = new db();
            $conn = $db->abrirConexion();

            $sql = "SELECT * FROM pa";
            $respuesta = $conn->prepare($sql);
            $respuesta->execute();
            $result = $respuesta->fetchAll();

            $db->cerrarConexion();
            return $result;
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}