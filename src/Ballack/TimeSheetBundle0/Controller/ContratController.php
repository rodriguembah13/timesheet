<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ballack\TimeSheetBundle\Entity\Contrat;
use Ballack\TimeSheetBundle\Form\ContratType;

/**
 * Contrat controller.
 *
 */
class ContratController extends Controller
{
    /**
     * Lists all Contrat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contrats = $em->getRepository('BallackTimeSheetBundle:Contrat')->findAll();

        return $this->render('BallackTimeSheetBundle:contrat:index.html.twig', array(
            'contrats' => $contrats,
        ));
    }

    /**
     * Creates a new Contrat entity.
     *
     */
    public function newAction(Request $request)
    {
        $contrat = new Contrat();
        $form = $this->createForm(new ContratType(), $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($contrat->getEmploye()->getCompte()->isEnabled()==false){
                $contrat->getEmploye()->getCompte()->setEnabled(true);
            }
            $em->persist($contrat);
            $em->flush();

            return $this->redirectToRoute('contrat_show', array('id' => $contrat->getId()));
        }

        return $this->render('BallackTimeSheetBundle:contrat:new.html.twig', array(
            'contrat' => $contrat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contrat entity.
     *
     */
    public function showAction(Contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);

        return $this->render('BallackTimeSheetBundle:contrat:show.html.twig', array(
            'contrat' => $contrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Contrat entity.
     *
     */
    public function editAction(Request $request, Contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);
        $editForm = $this->createForm(new ContratType(), $contrat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrat);
            $em->flush();

            return $this->redirectToRoute('contrat_edit', array('id' => $contrat->getId()));
        }

        return $this->render('BallackTimeSheetBundle:contrat:edit.html.twig', array(
            'contrat' => $contrat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contrat entity.
     *
     */
    public function deleteAction(Request $request, Contrat $contrat)
    {
        $form = $this->createDeleteForm($contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contrat);
            $em->flush();
        }

        return $this->redirectToRoute('contrat_index');
    }

    /**
     * Creates a form to delete a Contrat entity.
     *
     * @param Contrat $contrat The Contrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contrat $contrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contrat_delete', array('id' => $contrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
