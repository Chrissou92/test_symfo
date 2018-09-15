<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // create form
        $form = $this->createFormBuilder()
        ->add('firstName', TextType::class)
        ->add('lastName', TextType::class)
        ->add('numEtud', TextType::class)
        ->getForm();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array('form' => $form->createView(),
    ));
    }
}
