<?php

namespace ExerciseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ExerciseBundle\Model\Human;
use ExerciseBundle\Model\FightInterface;

/**
 * Knight
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ExerciseBundle\Entity\KnightRepository")
 */
class Knight extends Human implements FightInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="strength", type="integer", options={"default":0})
     */
    private $strength;

    /**
     * @var integer
     *
     * @ORM\Column(name="weaponPower", type="integer", options={"default":0}))
     */
    private $weaponPower;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set strength
     *
     * @param integer $strength
     * @return Knight
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    
        return $this;
    }

    /**
     * Get strength
     *
     * @return integer 
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set weaponPower
     *
     * @param integer $weaponPower
     * @return Knight
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    
        return $this;
    }

    /**
     * Get weaponPower
     *
     * @return integer 
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * Calculate the Power Level of the Fighter
     *
     * @return int
     */
    public function calculatePowerLevel()
    {
        return $this->getWeaponPower() + $this->getStrength();
    }
}

