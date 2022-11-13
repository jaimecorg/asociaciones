<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table()
 */
class Tarea
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
    private $titulo;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $empleado;

    /**
     * @ORM\Column(type="integer", unique=true)
     * @var int
     */
    private $codigo;

    /**
     * @ORM\Column(type="time", nullable=true)
     * @var \DateTime
     */
    private $tiempoEstimado;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $detalle;

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
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Tarea
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * @param int $empleado
     * @return Tarea
     */
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;
        return $this;
    }

    /**
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param int $codigo
     * @return Tarea
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTiempoEstimado()
    {
        return $this->tiempoEstimado;
    }

    /**
     * @param \DateTime $tiempoEstimado
     * @return Tarea
     */
    public function setTiempoEstimado($tiempoEstimado)
    {
        $this->tiempoEstimado = $tiempoEstimado;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * @param string $detalle
     * @return Tarea
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
        return $this;
    }

}