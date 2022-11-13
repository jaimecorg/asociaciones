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
}