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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
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
     * @param integer $enabled
     *
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
