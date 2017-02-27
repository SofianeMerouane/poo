<?php

namespace Librairies\LibrairiesTesBundle\Tools;

class UserDCISS
{
    
    protected $name;
    protected $mail;
    
    public function __construct($name,$mail) 
    {
        $this->name = $name;
        $this->mail = $mail;
    }
    public function afficheName()
    {
        return $this->name;
    }
    
            
}


