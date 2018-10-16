<?php
/**
 * Created by PhpStorm.
 * User: nassim
 * Date: 16/10/2018
 * Time: 14:08
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        /*
        * A controller must return a Symfony Response instance
        */

        return new Response("Check it check it");
    }

    /**
     * @Route("/news/{slugg}")
     */
    public function show($slugg)
    {
        return new Response(sprintf(
            'my Article %s',
            $slugg
        ));
    }
}