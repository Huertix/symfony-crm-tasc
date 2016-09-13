<?php
/**
 * Created by PhpStorm.
 * User: huertix
 * Date: 9/13/16
 * Time: 9:04 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Article {

    private $name;
    private $ref;
    
    public function __construct($name, $ref) {
        $this->name = $name;
        $this->ref = $ref;
    }

    public function getName() {
        return $this->name;
    }

    public function getReference() {
        return $this->ref;
    }
    
}