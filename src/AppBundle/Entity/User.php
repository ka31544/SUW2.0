<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * users
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\dostep",mappedBy="nrUser")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\File",mappedBy="nrUser")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DownloadFile",mappedBy="nrUser")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="type_account", type="string", nullable=true)
     */
    private $typeAccount;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set typeAccount
     *
     * @param string $typeAccount
     *
     * @return User
     */
    public function setTypeAccount($typeAccount)
    {
        $this->typeAccount = $typeAccount;

        return $this;
    }

    /**
     * Get typeAccount
     *
     * @return string
     */
    public function getTypeAccount()
    {
        return $this->typeAccount;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }
}
