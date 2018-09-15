<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Student")
 */
 class Student
 {
 /**
  *  @ORM\Column(type="integer")
  *   @ORM\Id
  *   @ORM\GeneratedValue(strategy="AUTO")
  */
 private $id;

/**
 * @ORM\Column(name="FirstName", type="string", length=25)
 */
 private $firstName;

/**
 * @ORM\Column(name="LastName", type="string", length=25)
 */
 private $lastName;

/**
 * @ORM\Column(name="NumEtud", type="integer")
 */
 private $numEtud;

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
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of First Name
     *
     * @param mixed firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of Last Name
     *
     * @param mixed lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of Num Etud
     *
     * @return mixed
     */
    public function getNumEtud()
    {
        return $this->numEtud;
    }

    /**
     * Set the value of Num Etud
     *
     * @param mixed numEtud
     *
     * @return self
     */
    public function setNumEtud($numEtud)
    {
        $this->numEtud = $numEtud;

        return $this;
    }

}
