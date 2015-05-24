<?php

namespace Husel\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Husel\FrontendBundle\Entity\Journal;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="husel_frontend_homepage")
     */
    public function indexAction()
    {
        return $this->render('HuselFrontendBundle:Default:index.html.twig');
    }

    /**
     * @Route("/core/journalCreate/{orderId}", name="journal_create")
     */
    public function journalCreateAction($orderId = 0)
    {
        $journal = $this->get("husel.journal")->create(1, 2, "2015-05-04", 10);
        die();
    }

}
