<?php

namespace testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;
/**
 * Status
 */
class Status
{
    /**
     * @var integer
     */
    private $id;
    protected $status;
    protected $userid;
    protected $time;

    function __construct() {
        $this->userid = new ArrayCollection();
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
    function getStatus() {
        return $this->status;
    }

    function getUserid() {
        return $this->userid;
    }

    function getTime() {
        return $this->time;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

    function setTime($time) {
        $this->time = $time;
    }


}
