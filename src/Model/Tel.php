<?php 

namespace App\Model;

class User 
{
      /**
     * Undocumented variable
     *
     * @var int
     */
    private $id;

    private $name;

    private $image;

    private $prix;

    private $quantité;


    /**
     * Get undocumented variable
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    // /**
    //  * Set undocumented variable
    //  *
    //  * @param  int  $id  Undocumented variable
    //  *
    //  * @return  self
    //  */ 
    // public function setId(int $id)
    // {
    //     $this->id = $id;

    //     return $this;
    // }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of quantité
     */ 
    public function getQuantité()
    {
        return $this->quantité;
    }

    /**
     * Set the value of quantité
     *
     * @return  self
     */ 
    public function setQuantité($quantité)
    {
        $this->quantité = $quantité;

        return $this;
    }
}