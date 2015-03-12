<?php

namespace testBundle\Controller;

use testBundle\Entity\User;
use testBundle\Entity\Status;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($id) {
        return $this->render('testBundle:Default:index.html.twig', array('id' => $id));
    }

    /*
     * add row to database
     */

    public function createAction() {
        $user = new User();
        $user->setName("sasitha wathmal");
        $user->setDescription("i am awesome,, you are not!! be jealous!");
        $user->setPicture("https://pbs.twimg.com/profile_images/531102523289911297/6lDvlmEQ_400x400.png");

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return new Response('created product id ' . $user->getId());
    }

    public function showAction() {
        // find object by its primary key
        $fosuser= $this->getUser();
        if(!$fosuser){
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        
        
        $id = $fosuser->getId();
        $user = $this->getDoctrine()->getRepository('testBundle:User')->findOneBy(array('fosuserid'=> $id));
        
        if (!$user) {
            // user not found in the user table.
            $em = $this->getDoctrine()->getManager();
            
            $newuser = new User();
            $newuser->setPicture("http://eastweb.ualr.edu/wp-content/uploads/2014/09/default-user.jpg");
            $newuser->setName($fosuser->getUserName());
            $newuser->setDescription("no description added");
            $newuser->setFosuserid($id);
            
            $em->persist($newuser);
            $em->flush();
            
            $user= $this->getDoctrine()->getRepository('testBundle:User')->findOneBy(array('fosuserid'=> $id));
            //return $this->render('testBundle:Default:profile.html.twig', array('name' => 'no profile found'));
        }

        return $this->render('testBundle:Default:profile.html.twig', array('id' => $user->getId(),
                    'name' => $user->getName(), 'picture' => $user->getPicture(), 'description' => $user->getDescription()));
    }

    
    
    
    /*
     * this controller action is to update the user in user table
     * the fos_user table is already implemeted in fos user bundle/
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $fosuser= $this->getUser();
        if(!$fosuser){
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        
        
        $id = $fosuser->getId();
        $user= $em->getRepository("testBundle:User")->findOneBy(array('fosuserid'=> $id));
        //$user = new User();
        //$user->setEmail("wathmal@gmail.com");
        //$user->setPlainpassword("abc");
        //$user->setPicture("");
        
        //if no user in testBundle/User entity table create it.
        
        
        $form = $this->createFormBuilder($user)
                ->add('name', 'text')
                ->add('description', 'textarea')
                ->add('picture', 'url')
                ->add('save', 'submit', array('label' => 'save changes'))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $user->setName($form->get('name')->getData());
            $user->setDescription($form->get('description')->getData());
            $user->setPicture($form->get('picture')->getData());
            //$em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('profile_page'));
        }

        return $this->render('testBundle:Default:edituser.html.twig', array('form' => $form->createView(),'user'=>$fosuser));
    }
    
    
    
    public function showStatusAction(Request $request){
        $fosuser= $this->getUser();
        if(!$fosuser){
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        
        $status = $this->getDoctrine()->getRepository('testBundle:Status')->findAll();
        $users = $this->getDoctrine()->getRepository('testBundle:User')->findAll();
        
        
        $newstatus= new Status();
        $em = $this->getDoctrine()->getManager();
        $originuser= $em->getRepository("testBundle:User")->findOneBy(array('fosuserid'=> $this->getUser()->getId()));
        $form = $this->createFormBuilder($newstatus)
                ->add('status', 'textarea')
                ->add('save', 'submit', array('label' => 'post status'))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $newstatus->setStatus($form->get('status')->getData());
            $newstatus->setTime(new \DateTime());
            $newstatus->setUserid($originuser->getId());
            
            $em->persist($newstatus);
            $em->flush();

            return $this->redirect($this->generateUrl('feed_home'));
        }
        
        
        
        $arr= array();
        
        // retrieve statuses from latest to oldest :)
        // loop array backwards
        for($x=count($status)-1; $x>= 0; $x--) {
            $userid= $status[$x]->getUserid();
            
            $username="";
            $picture="";
            foreach ($users as $user){
                if($user->getId() == $userid){
                    $username= $user->getName();
                    $picture= $user->getPicture();
                }
            }
            $arr[$x]=array('username'=>$username, 'picture'=>$picture, 'status'=> $status[$x]->getStatus());
            
        }
         return $this->render('testBundle:Default:feed.html.twig', array('length' => count($status), 'form'=> $form->createView(),'array'=> $arr));
        
    }

}
