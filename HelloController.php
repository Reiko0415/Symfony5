<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    /**
     * @Route("/hello" , name="hello")
     */

    public function index(Request $request)
    {
        $content = <<< EOM
        <html><head><title>Hello</title></head>
        <body><h1>Hello!</h1>
        <p>this is Symphony sample page.</p>
        </body></html>
        EOM;

        $response = new Response(
            $content,Response::HTTP_OK,
            array('content-type' => 'text/html')
        );
        return $response;
    }
      
    /**
     *  @Route("/notfound",name="notfound")
     */
    public function notfound(Request $request){
        $content = <<< EOM
        <html><head><title>Error</title></head>
        <body><h1>ERROR</h1>
        <p>Error 404</p>
        </body></html>
        EOM;

        $response = new Response(
            $content,Response::HTTP_NOT_FOUND,
            array('content-type' => 'text/html')
        );
        return $response;
    }
    
    /**
     *  @Route("/error",name="error")
     */
    public function error(Request $request){
        $content = <<< EOM
        <html><head><title>Error</title></head>
        <body><h1>ERROR</h1>
        <p>Error 500</p>
        </body></html>
        EOM;

        $response = new Response(
            $content,Response::HTTP_INTERNAL_SERVER_ERROR,
            array('content-type' => 'text/html')
        );
        return $response;
    }
}
