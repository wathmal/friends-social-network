<?php

namespace testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;
    protected $fosuserid;
    protected $name;
    protected $description;
    protected $picture;

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getPicture() {
        return $this->picture;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    function getFosuserid() {
        return $this->fosuserid;
    }

    function setFosuserid($fosuserid) {
        $this->fosuserid = $fosuserid;
    }



    
}
