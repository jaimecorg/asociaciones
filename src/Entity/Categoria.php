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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbreviatura(): ?string
    {
        return $this->abreviatura;
    }

    /**
     * @param string $abreviatura
     * @return Categoria
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;
        return $this;
    }

    /**
     * @return bool
     */
    public function isArchivado()
    {
        return $this->archivado;
    }

    /**
     * @param bool $archivado
     * @return Categoria
     */
    public function setArchivado($archivado)
    {
        $this->archivado = $archivado;
        return $this;
    }
}