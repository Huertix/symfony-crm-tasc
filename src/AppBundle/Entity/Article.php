<?php
/**
 * Created by PhpStorm.
 * User: huertix
 * Date: 9/13/16
 * Time: 9:04 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="articulo")
 */
class Article {

    /**
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @ORM\Id
     */
    private $codigo;

    /**
     * @return mixed
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * @return mixed
     */
    public function getNombre() {
        return $this->nombre;
    }

}