<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table()
 */
class Empleado
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $nombre;
    /**
     * @ORM\Column(type="string", length=80)
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $estaActivo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Empleado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return Empleado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param \DateTime $fechaNacimiento
     * @return Empleado
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEstaActivo()
    {
        return $this->estaActivo;
    }

    /**
     * @param bool $estaActivo
     * @return Empleado
     */
    public function setEstaActivo($estaActivo)
    {
        $this->estaActivo = $estaActivo;
        return $this;
    }

}