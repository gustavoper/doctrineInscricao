<?php
//src/Inscricao/Model/User.php
namespace Inscricao\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User {
    
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string",length=150)
     * 
     * @var string
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string",length=150,unique=true)
     * 
     * @var string
     */
    private $login;
    
    /**
     * @ORM\Column(type="string",length=150)
     * 
     * @var string
     */
    private $password;
    
    /**
     * @ORM\Column(type="string",length=250,nullable=true)
     * @var string
     */
    private $email;
    

    /**
     * @ORM\Column(type="string",length=250,nullable=true)
     * @var string
     */
    private $avatar;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Subscription",mappedBy="Event", cascade={"all"})
     * 
     */
    private $subscription;
    
    
    

    /**
     * @return the $subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param field_type $subscription
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
    }

    /**getters and setters**/
    
     
    
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

}