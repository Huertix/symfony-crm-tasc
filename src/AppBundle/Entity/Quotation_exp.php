<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="d_presuv")
 */
class Quotation_exp {

  /**
   * @ORM\Column(name="numero", type="string")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="NONE")
   */
  private $numero;

  /**
   * @ORM\Id
   * @ORM\Column(name="linia", type="string")
   * @ORM\GeneratedValue(strategy="NONE")
   */
  private $linia;

  /**
   * @ORM\Column(type="string")
   */
  private $articulo;

  /**
   * @ORM\Column(type="string")
   */
  private $definicion;

  /**
   * @return mixed
   */
  public function getNumero() {
    return $this->numero;
  }

  /**
   * @param mixed $numero
   */
  public function setNumero($numero) {
    $this->numero = $numero;
  }

  /**
   * @return mixed
   */
  public function getLinia() {
    return $this->linia;
  }

  /**
   * @param mixed $linia
   */
  public function setLinia($linia) {
    $this->linea = $linia;
  }

  /**
   * @return mixed
   */
  public function getArticulo() {
    return $this->articulo;
  }

  /**
   * @param mixed $articulo
   */
  public function setArticulo($articulo) {
    $this->articulo = $articulo;
  }

  /**
   * @return mixed
   */
  public function getDefinicion() {
    return $this->definicion;
  }

  /**
   * @param mixed $definicion
   */
  public function setDefinicion($definicion) {
    $this->definicion = $definicion;
  }

}
