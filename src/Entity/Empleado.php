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
}