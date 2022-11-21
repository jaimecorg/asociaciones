<?php
namespace App\Entity;

use Doctrine\Common\Collections\Collection;
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
     * @var int|null
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string|null
     */
    private $titulo;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    private $empleado;

    /**
     * @ORM\Column(type="integer", unique=true)
     * @var int|null
     */
    private $codigo;

    /**
     * @ORM\Column(type="time", nullable=true)
     * @var \DateTime|null
     */
    private $tiempoEstimado;

    /**
     * @ORM\Column(type="text")
     * @var string|null
     */
    private $detalle;

    /**
     * @ORM\OneToOne(targetEntity="Categoria")
     * @ORM\JoinColumn(nullable=false, unique=true)
     * @var Categoria
     */
    private $etiquetas;

    /**
     * @ORM\OneToMany(targetEntity="Categoria", mappedBy="tareas")
     * @var Categoria[]|Collection
     */
    private $responsabilidades;

    /**
     * @param Categoria $etiquetas
     * @param Categoria[]|Collection $responsabilidades
     */
    public function __construct(Categoria $etiquetas, $responsabilidades)
    {
        $this->etiquetas = $etiquetas;
        $this->responsabilidades = $responsabilidades;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): ?string
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
    public function getEmpleado(): ?string
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

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    public function getTiempoEstimado(): ?\DateTime
    {
        return $this->tiempoEstimado;
    }

    public function setTiempoEstimado($tiempoEstimado)
    {
        $this->tiempoEstimado = $tiempoEstimado;
        return $this;
    }

    public function getDetalle(): ?string
    {
        return $this->detalle;
    }

    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
        return $this;
    }

    /**
     * @return Categoria
     */
    public function getEtiquetas(): Categoria
    {
        return $this->etiquetas;
    }

    /**
     * @param Categoria $etiquetas
     * @return Tarea
     */
    public function setEtiquetas(Categoria $etiquetas): Tarea
    {
        $this->etiquetas = $etiquetas;
        return $this;
    }

    /**
     * @return Categoria[]|Collection
     */
    public function getResponsabilidades()
    {
        return $this->responsabilidades;
    }

    /**
     * @param Categoria[]|Collection $responsabilidades
     * @return Tarea
     */
    public function setResponsabilidades($responsabilidades)
    {
        $this->responsabilidades = $responsabilidades;
        return $this;
    }

}