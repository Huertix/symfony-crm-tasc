<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="c_presuv")
 */
class Quotation {

  /**
   * @ORM\Id
   * @ORM\Column(type="string")
   */
  private $numero;

  /**
   * @ORM\Column(type="string")
   */
  private $usuario;

  /**
   * @ORM\Column(type="string")
   */
  private $fecha;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client", inversedBy="presupuestos")
   * @ORM\JoinColumn(name="cliente", referencedColumnName="codigo")
   */
  private $cliente;


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
  public function getUsuario()
  {
    return $this->usuario;
  }

  /**
   * @return mixed
   */
  public function getFecha()
  {

    $date = substr($this->fecha, 0, 11);
    return $date;
  }

  /**
   * @return mixed
   */
  public function getCliente()
  {
    return $this->cliente;
  }

  /**
   * @param mixed $cliente
   */
  public function setCliente($cliente) {
    $this->cliente = $cliente;
  }




}
