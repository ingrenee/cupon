<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ciudad
 *
 * @author rmorales
 */

namespace Cupon\CiudadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * * @ORM\Table(name="ProyectoCupon_Ciudad")
 */
class Ciudad {

    //put your code here
    /**
     * @ORM\Id
     * @ORM\Column (type="integer")
     * @ORM\GenerateValue
     */
    protected $id;

    /**
     * @ORM\Column (type="string",length:150)
     */
    protected $nombre;

    /**
     * @ORM\Column (type="string",length:100)
     */
    protected $slug;

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    
    function __toString() {
        return $this->getNombre();
    }
}