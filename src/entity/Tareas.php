<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TareasRepository;

/**
 * @ORM\Entity(repositoryClass=TareasRepository::class)
 * @ORM\Table(name="tareas")
 */

 class Tareas
 {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer", name="id")
    */
    private $id;

    /**
    * @ORM\Column(name="titulo", type="string", length="255")
    */
    private $titulo;

    /**
    * @ORM\Column(name="descripcion", type="string", length="65535")
    */
    private $descripcion;

    /**
    * @ORM\Column(name="fecha_creacion", type="date")
    */
    private $fecha_creacion;

    /** 
    * @ORM\Column(name="fecha_vencimiento", type="date")
    */
    private $fecha_vencimiento;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of fecha_creacion
     */ 
    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */ 
    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    /**
     * Get the value of fecha_vencimiento
     */ 
    public function getFecha_vencimiento()
    {
        return $this->fecha_vencimiento;
    }

    /**
     * Set the value of fecha_vencimiento
     *
     * @return  self
     */ 
    public function setFecha_vencimiento($fecha_vencimiento)
    {
        $this->fecha_vencimiento = $fecha_vencimiento;

        return $this;
    }
 }