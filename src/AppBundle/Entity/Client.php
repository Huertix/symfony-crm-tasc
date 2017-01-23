<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientes")
 */
class Client {


  /**
   * @ORM\Column(name="codigo", type="string")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="NONE")
   */
  protected $id;

  /**
   * @ORM\Column(type="string")
   */
  protected $nombre;

  /**
   * @ORM\OneToMany(targetEntity="AppBundle\Entity\Quotation", mappedBy="cliente")
   */
  protected $presupuestos;


  public function getId() {
    return $this->id;
  }

  public function getNombre() {
    return $this->nombre;
  }

  /**
   * @return mixed
   */
  public function getPresupuestos() {
    return $this->presupuestos;
  }

  /**
   * @param mixed $presupuestos
   */
  public function setPresupuestos($presupuestos) {
    $this->presupuestos = $presupuestos;
  }



}
