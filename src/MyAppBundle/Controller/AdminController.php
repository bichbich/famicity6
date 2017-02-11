<?php

namespace MyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('indexAdmin.html.twig');
    }

    public function HomeAction()
    {
        return $this->render('::home.html.twig');
    }
    public function AdminpageAction()
    {
        return $this->render('::admin.html.twig');
    }

    public function ClientpageAction()
    {
        return $this->render('::client.html.twig');
    }
    public function showinfoAction()
    {
        return $this->render('::loginsuccess.html.twig');
    }
    public function gestionCompteAction()
    {
        return $this->render('MyAppBundle:Default:gestionCompte.html.twig');
    }
    public function indexAdminAction()
    {
        return $this->render('MyAppBundle:Default:indexAdmin.html.twig');
    }
    public function gestionActualiteAction()
    {
        return $this->render('MyAppBundle:Default:gestionActualite.html.twig');
    }
    public function gestionServiceAction()
    {
        return $this->render('MyAppBundle:Default:gestionService.html.twig');
    }
    public function gestionEvaluationAction()
    {
        return $this->render('MyAppBundle:Default:gestionEvaluation.html.twig');
    }
    public function gestionReservationAction()
    {
        return $this->render('MyAppBundle:Default:gestionReservation.html.twig');
    }
    public function gestionPromotionAction()
    {
        return $this->render('MyAppBundle:Default:gestionPromotion.html.twig');
    }
    public function gestionArbreAction()
    {
        return $this->render('MyAppBundle:Default:gestionArbre.html.twig');
    }


}
