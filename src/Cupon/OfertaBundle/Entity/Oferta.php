<?php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ProyectoCupon_Oferta")
 */
class Oferta {

   /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string", length=100) */
    private $nombre;
   /** @ORM\Column(type="string", length=100) */
    private $slug;

  /** @ORM\Column(type="string", length=100) */
    private $descripcion;

 /** @ORM\Column(type="string", length=100) */
    private $rutaFoto;

/** @ORM\Column(type="decimal") */
    private $precio;

/** @ORM\Column(type="decimal") */
    private $descuento;

  /** @ORM\Column(type="string", length=100) */
    private $fechaPublicacion;

/** @ORM\Column(type="string", length=100) */
    private $fechaExpiracion;

/** @ORM\Column(type="integer") */
    private $compras;

/** @ORM\Column(type="integer") */
    private $umbral;

/** @ORM\Column(type="boolean") */
    private $revisada;

    /** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad") */
    private $ciudad;

    /** @ORM\ManyToOne(targetEntity="Cupon\TiendaBundle\Entity\Tienda") */
    private $tienda;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Oferta
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Oferta
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Oferta
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set rutaFoto
     *
     * @param string $rutaFoto
     * @return Oferta
     */
    public function setRutaFoto($rutaFoto) {
        $this->rutaFoto = $rutaFoto;

        return $this;
    }

    /**
     * Get rutaFoto
     *
     * @return string 
     */
    public function getRutaFoto() {
        return $this->rutaFoto;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Oferta
     */
    public function setPrecio($precio) {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio() {
        return $this->precio;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Oferta
     */
    public function setDescuento($descuento) {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento() {
        return $this->descuento;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return Oferta
     */
    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    /**
     * Set fechaExpiracion
     *
     * @param \DateTime $fechaExpiracion
     * @return Oferta
     */
    public function setFechaExpiracion($fechaExpiracion) {
        $this->fechaExpiracion = $fechaExpiracion;

        return $this;
    }

    /**
     * Get fechaExpiracion
     *
     * @return \DateTime 
     */
    public function getFechaExpiracion() {
        return $this->fechaExpiracion;
    }

    /**
     * Set compras
     *
     * @param integer $compras
     * @return Oferta
     */
    public function setCompras($compras) {
        $this->compras = $compras;

        return $this;
    }

    /**
     * Get compras
     *
     * @return integer 
     */
    public function getCompras() {
        return $this->compras;
    }

    /**
     * Set umbral
     *
     * @param integer $umbral
     * @return Oferta
     */
    public function setUmbral($umbral) {
        $this->umbral = $umbral;

        return $this;
    }

    /**
     * Get umbral
     *
     * @return integer 
     */
    public function getUmbral() {
        return $this->umbral;
    }

    /**
     * Set revisada
     *
     * @param boolean $revisada
     * @return Oferta
     */
    public function setRevisada($revisada) {
        $this->revisada = $revisada;

        return $this;
    }

    /**
     * Get revisada
     *
     * @return boolean 
     */
    public function getRevisada() {
        return $this->revisada;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Oferta
     */
    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad) {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad() {
        return $this->ciudad;
    }

    /**
     * Set tienda
     *
     * @param string $tienda
     * @return Oferta
     */
    public function setTienda(\Cupon\TiendaBundle\Entity\Tienda $tienda) {
        $this->tienda = $tienda;

        return $this;
    }

    /**
     * Get tienda
     *
     * @return string 
     */
    public function getTienda() {
        return $this->tienda;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
