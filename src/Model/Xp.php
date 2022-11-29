<?php 

namespace App\Model;

class Xp
{
    /**
     * Undocumented variable
     *
     * @var int
     */
    private $id;

    private $name;

    private $niveau;

    private $score;


    /**
     * Get undocumented variable
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

//     /**
//      * Set undocumented variable
//      *
//      * @param  int  $id  Undocumented variable
//      *
//      * @return  self
//      */ 
//     public function setId(int $id)
//     {
//         $this->id = $id;

//         return $this;
//     }

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
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of score
     */ 
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @return  self
     */ 
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }
}