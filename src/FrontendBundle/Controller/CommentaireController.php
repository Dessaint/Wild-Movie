<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Film;
use FrontendBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Request;

class CommentaireController extends Controller
{
	
    public function newCommentaireAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser(); 

        $commentaire = new Commentaire();

        $form = $this->createForm('FrontendBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        $em->persist($commentaire);
        $em->flush();

        return $this->render('FrontendBundle:Commentaire:newcommentaire.html.twig', array(
            'form' => $form->createView(),

       )); 
    }
}
