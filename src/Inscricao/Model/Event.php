<?php
namespace Inscricao\Model;

use Doctrine\ORM\Mapping as ORM;


class Event {
    
    
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=250,nullable=true)
     * @var string
     */
    private $name;
   
    
    /**
     * @ORM\Column(type="date",nullable=false)
     * @var string
     */
    private $startDate;
   
    /**
     * @ORM\Column(type="date",nullable=false)
     * @var string
     */
    private $endDate;
    
    
    
    /**
     * @ORM\Column(type="text",nullable=false)
     * @var string
     */
    private $location;
    
    
    /**
     * @ORM\Column(type="float",nullable=false)
     * @var string
     */
    private $ticketPrice;
    
}