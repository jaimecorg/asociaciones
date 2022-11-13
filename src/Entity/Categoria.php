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
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $descripcion;
    /**
     * @ORM\Column(type="string", length=20, unique=true)
     * @var string
     */
    private $abreviatura;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $archivado;
}