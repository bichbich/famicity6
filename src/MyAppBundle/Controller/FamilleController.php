<?php

namespace MyAppBundle\Controller;

use MyAppBundle\Entity\Famille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Famille controller.
 *
 */
class FamilleController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $familles = $em->getRepository('MyAppBundle:Famille')->findAll();

        return $this->render('famille/index.html.twig', array(
            'familles' => $familles,
        ));
    }

    /**
     * Creates a new famille entity.
     *
     */
    public function newAction(Request $request)
    {
        $famille = new Famille();
        $form = $this->createForm('MyAppBundle\Form\FamilleType', $famille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nomfamille = $form->get('NomdeFamille')->getData();

            $em = $this->getDoctrine()->getManager();
            $test = $em->getRepository('MyAppBundle:Famille')->findOneBy(array('NomdeFamille'=>$nomfamille));
            if($test){
                return new Response('error');
            }else{$em->persist($famille);
                $em->flush($famille); $familles = $em->getRepository('MyAppBundle:Famille')->findAll();
               return $this->render('@MyApp/Default/NosFamilles.html.twig', array('id' => $famille->getId(),'familles' => $familles));}



        }

        return $this->render('famille/new.html.twig', array(
            'famille' => $famille,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a famille entity.
     *
     */
    public function showAction(Famille $famille)
    {
        $deleteForm = $this->createDeleteForm($famille);

        return $this->render('famille/show.html.twig', array(
            'famille' => $famille,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Famille $famille)
    {
        $deleteForm = $this->createDeleteForm($famille);
        $editForm = $this->createForm('MyAppBundle\Form\FamilleType', $famille);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('famille_edit', array('id' => $famille->getId()));
        }

        return $this->render('famille/edit.html.twig', array(
            'famille' => $famille,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a famille entity.
     *
     */
    public function deleteAction(Request $request, Famille $famille)
    {
        $form = $this->createDeleteForm($famille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($famille);
            $em->flush($famille);
        }

        return $this->redirectToRoute('famille_index');
    }

    /**
     * Creates a form to delete a famille entity.
     *
     * @param Famille $famille The famille entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Famille $famille)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('famille_delete', array('id' => $famille->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    private function RejoindreAction(){

    }
}
