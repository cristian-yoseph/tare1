<?php
namespace Clases;

class Usuario
{
    protected $nombres;
    protected $apellidos;
    protected $telefono;
    protected $correo;
    protected $id_pa;

    public function __construct($nombres, $apellidos, $telefono, $correo, $id_pa)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->id_pa = $id_pa;
    }

    // getter y setters
    public function getNombres(): string
    {
        return $this->nombres;
    }

    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getCorreo(): string
    {
        return $this->correo;
    }

    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    public function getIdPa(): int
    {
        return $this->id_pa;
    }

    public function setIdPa($id_pa): void
    {
        $this->id_pa = $id_pa;
    }


}