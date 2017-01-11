<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use Symfony\Component\HttpFoundation\Response;

class ExerciseController extends Controller
{
    
    /**
     * @Route("/users", name="users")
    */
    public function userAction()
    {
        return new Response(
            $this->renderView('exercise/exercise.html.twig'),
            Response::HTTP_OK,
            ['X-My-Header' => "Mon propre header"]
            );
    }
}
