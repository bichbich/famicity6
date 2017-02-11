<?php

namespace MyAppBundle\Controller;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use MyAppBundle\Entity\Mail;
use MyAppBundle\Form\MailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Message;
use Symfony\Component\HttpFoundation\Request;


class MailController extends Controller
{
    public function indexAction(Request $request)
    {
        $mail = new Mail();
        $form = $this->createForm(MailType::class, $mail);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $message = \Swift_Message::newInstance()
                ->setSubject('Accusé de réception')
                ->setFrom('famicty@gmail.com')
                ->setTo($mail->getEmail())
                ->setBody($this->renderView('FOSUserBundle:Registration:check_email.html.twig',
                    array('username' => $mail->getUsername(), 'email' => $mail->getEmail(), 'plainPassword' => $mail->getPlainPassword())), 'text/html');
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('my_app_mail_accuse'));
        }
        return $this->render('MyAppBundle:Default:register.html.twig', array('form'=>$form->createView()));

    }

}

?>

