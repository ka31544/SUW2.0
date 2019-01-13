<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $countUsers = $this->getDoctrine()->getRepository('AppBundle:User')->countUsers();
        $countDayDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countDayDownloads();
        $countWeekDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countWeekDownloads();
        $countMonthDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countMonthDownloads();

//        $user = $repository->getByUsername('ka31544');

        return $this->render('main/index.html.twig', array(
            'countUsers' => $countUsers,
            'countDayDownloads' => $countDayDownloads,
            'countWeekDownloads' => $countWeekDownloads,
            'countMonthDownloads' => $countMonthDownloads,
//            'user' => $user,
        ));
    }

}
