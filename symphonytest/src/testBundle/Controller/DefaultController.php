<?php

namespace testBundle\Controller;

use testBundle\Entity\User;
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

    public function showAction($id) {
        // find object by its primary key
        $user = $this->getDoctrine()->getRepository('testBundle:User')->find($id);

        if (!$user) {
            return $this->render('testBundle:Default:profile.html.twig', array('id' => 'no profile found'));
        }

        return $this->render('testBundle:Default:profile.html.twig', array('id' => $user->getId(),
                    'name' => $user->getName(), 'picture' => $user->getPicture(), 'description' => $user->getDescription()));
    }

    
    
    
    
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $user = new User();
        //$user->setEmail("wathmal@gmail.com");
        //$user->setPlainpassword("abc");
        $user->setPicture("");
        $form = $this->createFormBuilder($user)
                ->add('name', 'text')
                ->add('email', 'email')
                ->add('plainpassword','password')
                ->add('description', 'text')
                ->add('save', 'submit', array('label' => 'create user'))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $user->setName($form->get('name')->getData());
            $user->setDescription($form->get('description')->getData());
            $user->setEmail($form->get('email')->getData());
            $user->setPlainpassword($form->get('plainpassword')->getData());
            
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('test_homepage', array('id' => $user->getId())));
        }

        return $this->render('testBundle:Default:adduser.html.twig', array('form' => $form->createView()));
    }

}
