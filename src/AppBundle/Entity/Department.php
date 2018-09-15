<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Department")
*/

class Department
{
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;

     /**
     * @ORM\Column(name="Name", type="string", length=25)
     */
     private $Name;

     /**
     * @ORM\Column(name="Capacity", type="integer")
     */
     private $Capacity;


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
 
    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed Name
     *
     * @return self
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get the value of Capacity
     *
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * Set the value of Capacity
     *
     * @param mixed Capacity
     *
     * @return self
     */
    public function setCapacity($Capacity)
    {
        $this->Capacity = $Capacity;

        return $this;
    }

}
