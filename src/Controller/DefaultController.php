<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }

    /**
     * @Route("/lucky/number/{max}", name="default")
     *
     */
    public function numberAction($max)
    {
        // génération d'un nombre aléatoire
        $number = Rand(1, $max);

        //ici on va chercher le template et on lui transmet la variable
        return $this->render('default/number.html.twig', [
            // pour fournir des variables au template
            // a gauche, le nom qui sera utilisé dans le template
            // a droite, la valeur
            'number' => $number
       ]);
    }
}
