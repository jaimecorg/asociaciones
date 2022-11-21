<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table()
 */
class Prioridad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int|null
     */
    private $id;

    /**
     * @ORM\Column(type="integer", unique=true)
     * @var int|null
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string|null
     */
    private $abreviatura;

    /**
     * @ORM\Column(type="string", length=80)
     * @var string|null
     */
    private $descripcion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): Prioridad
    {
        $this->numero = $numero;
        return $this;
    }

    public function getAbreviatura(): ?string
    {
        return $this->abreviatura;
    }

    public function setAbreviatura(?string $abreviatura): Prioridad
    {
        $this->abreviatura = $abreviatura;
        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): Prioridad
    {
        $this->descripcion = $descripcion;
        return $this;
    }


}