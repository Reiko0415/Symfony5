<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    /**
     * @Route("/hello/{name}/{pass}" , name="hello")
     */

    public function index($name='(noname)',$pass='(no pass)')
    {
        $result = '<html><body>';
        $result .= '<h1>Parameters</h1>';
        $result .= '<p> name:' . $name . '</p>';
        $result .= '<p> pass:' . $name . '</p>';
        $result .= '</body></html>';

        return new Response($result);
    }
}
