<?php

namespace Admin\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Admin\Bundle\Entity\Response;
use Admin\Bundle\Form\ResponseType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdmiScoBundle:Default:index.html.twig');
    }
   
    public function welcomeAction()
    {   
        
        return $this->render('AdmiScoBundle:Default:welcome.html.twig');
    }
    public function ShowAction()
    {
        return $this->render('AdmiScoBundle:Default:show.html.twig');
    }
     public function ContactAction()
    {
       $em = $this->getDoctrine()->getEntityManager();
        $u = new Response();
        $form = $this->createForm(new ResponseType(), $u);
        $request = $this->getRequest();

        if ($request->isMethod('POST')) {
            
            $form->bind($request);
            
            // var_dump($this->get('validator')->validate($form));die;
          if ($form->isValid()) {
            
        $s= $u->getSendTo();
        $f=$u->getSubject();
            $em->persist($u);
            
            $message = \Swift_Message::newInstance()
                    ->setSubject($f)
                    ->setFrom('fadi.omri94@gmail.com')
                    ->setTo($s)
                    ->setBody($this->renderView(
                            'AdmiScoBundle:Default:contact.txt.twig',array('user'=>$u)));
                    
        $this->get('mailer')->send($message);
        //var_dump($this->get('mailer'));die;
           
           
             echo " <script> alert('Merci,Votre Message a eté bien reçu on vous repondera le plutot possible');
                               
                                                            
    </script>";
          
        }
        }
        return $this->render('AdmiScoBundle:Default:response.html.twig',array(
                    'form' => $form->createview(),
        ));
    
}
    
}
