<?php

namespace Librairies\LibrairiesTesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
     
        $users = array() ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
        $users[] = new userdciss("ccd","ccxxx@xxxx.fr") ; 
      
        
        
        $userDCISS = new \Librairies\LibrairiesTesBundle\Tools\Dsi($users); 
        print_r($userDCISS) ; 
        
 
       
        
        return $this->render('LibrairiesTestBundle:Default:index.html.twig');
    }
    

}

    class userdciss {
     
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