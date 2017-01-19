<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientes")
 */
class Client {

  /**
   * @ORM\Id
   * @ORM\Column(type="string")
   */
  private $codigo;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $cif;
  /**
   * @ORM\Column(type="string")
   */
  private $nombre;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $nombre2;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $direccion;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $codpost;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $poblacion;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $provincia;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $pais;
  ///**
  // * @ORM\Column(type="string")
  // */
  //private $vendedor; //Todo: entity vendedor
  ///**
  // * @ORM\Column(type="date")
  // */
  //private $f_alta;


  public function getCodigo() {
    return $this->codigo;
  }

  public function getNombre() {
    return $this->nombre;
  }





}
