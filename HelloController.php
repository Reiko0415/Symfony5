<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class HelloController extends AbstractController
{
   /**
    * @Route("/hello", name="hello")
    */
   public function index(Request $request)
   {

        return $this->render('hello/index.html.twig', [
           'title' => 'Hello',
           'message' => 'これはテンプレート画面です',
       ]);
   }
}
