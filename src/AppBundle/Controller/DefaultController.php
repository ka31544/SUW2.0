<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $countUsers = $this->getDoctrine()->getRepository('AppBundle:User')->countUsers('user');
        $countDayDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countDayDownloads();
        $countWeekDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countWeekDownloads();
        $countMonthDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countMonthDownloads();
        $countYearDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countYearDownloads();
        $countAllDownloads = $this->getDoctrine()->getRepository('AppBundle:DownloadFile')->countAllDownloads();

//        $user = $repository->getByUsername('ka31544');

        return $this->render('main/index.html.twig', array(
            'countUsers' => $countUsers,
            'countDayDownloads' => $countDayDownloads,
            'countWeekDownloads' => $countWeekDownloads,
            'countMonthDownloads' => $countMonthDownloads,
            'countYearDownloads' => $countYearDownloads,
            'countAllDownloads' => $countAllDownloads,
//            'user' => $user,
        ));
    }

}
