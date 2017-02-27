<?php

namespace Librairies\LibrairiesTesBundle\Tools;

class Dsi implements DsiInterface
{
    protected $userDCISS = array();
    
    public function __construct(array $userDCISS) {
        foreach ( $userDCISS as $ob)
        {
            if($ob instanceof Librairies\LibrairiesTesBundle\Controller\userdciss ){
                $this->userDCISS = $userDCISS;
            }
        }
        
        print_r($this->userDCISS) ; 
    }
}