<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table()
 */
class Categoria
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
    private $descripcion;
    /**
     * @ORM\Column(type="string", length=20, unique=true)
     * @var string|null
     */
    private $abreviatura;

    /**
     * @ORM\Column(type="boolean")
     * @var bool|null
     */
    private $archivado;

    /**
     * @ORM\ManyToOne(targetEntity="Tarea", inversedBy="etiquetas")
     * @ORM\JoinColumn(nullable=false)
     * @var Tarea
     */
    private $tareas;

    /**
     * @ORM\OneToOne(targetEntity="Empleado")
     * @ORM\JoinColumn(nullable=false, unique=true)
     * @var Empleado
     */
    private $empleado;

    /**
     * @param Tarea $tareas
     */
    public function __construct(Tarea $tareas)
    {
        $this->tareas = $tareas;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getAbreviatura(): ?string
    {
        return $this->abreviatura;
    }

    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;
        return $this;
    }

    public function isArchivado()
    {
        return $this->archivado;
    }

    public function setArchivado($archivado)
    {
        $this->archivado = $archivado;
        return $this;
    }

    /**
     * @return Tarea
     */
    public function getTareas(): Tarea
    {
        return $this->tareas;
    }

    /**
     * @param Tarea $tareas
     * @return Categoria
     */
    public function setTareas(Tarea $tareas): Categoria
    {
        $this->tareas = $tareas;
        return $this;
    }

    /**
     * @return Empleado
     */
    public function getEmpleado(): Empleado
    {
        return $this->empleado;
    }

    /**
     * @param Empleado $empleado
     * @return Categoria
     */
    public function setEmpleado(Empleado $empleado): Categoria
    {
        $this->empleado = $empleado;
        return $this;
    }


}