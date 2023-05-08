<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/home/{name}', name: 'homepage')]
    public function home($name):Response
    {
        //return new Response('<h1>Ma première page Symfony</h1>');
        return $this->render('index.html.twig',['name'=>$name]);
    }
    
}
