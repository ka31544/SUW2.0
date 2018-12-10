<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends Controller
{
    public function homepageAction()
    {
        $message = "<body><h2>Response</h2></body>";
        $data = array(
            'html' => "<body><h2>Response</h2></body>"
        );

        return new JsonResponse($data);

    }
}
