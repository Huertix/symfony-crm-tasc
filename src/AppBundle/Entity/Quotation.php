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
 * @ORM\Table(name="c_presuv")
 */
class Quotation {

    /**
     * @ORM\Column(type="string")
     * @ORM\id
     */
    private $numero;

    /**
     * @ORM\Column(type="string")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string")
     */
    private $cliente;

    /**
     * @ORM\Column(type="integer")
     */
    private $importe;


    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @return mixed
     */
    public function getImporte()
    {
        return $this->importe;
    }

}