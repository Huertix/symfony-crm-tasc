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
     * @ORM\numero
     */
    private $number;

    /**
     * @ORM\Column(type="timestamp")
     * @ORM\fecha
     */
    private $timestamp;

    /**
     * @ORM\Column(type="string")
     * @ORM\cliente
     */
    private $client;

    /**
     * @ORM\Column(type="integer")
     * @ORM\importe
     */
    private $total_eur;


    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return mixed
     */
    public function getTotalEur()
    {
        return $this->total_eur;
    }

}