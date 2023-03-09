<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{  


    public function home($name)
    {
        //return new Response('<h1>Ma premiere page Symfony </h1>');
        return $this->render('index.html.twig',['name' => $name]);
    }
}