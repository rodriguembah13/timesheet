<?php

namespace Ballack\TimeSheetBundle\Controller;

use Ballack\TimeSheetBundle\Entity\TypeContrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Typecontrat controller.
 *
 */
class TypeContratController extends Controller
{
    /**
     * Lists all typeContrat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeContrats = $em->getRepository('BallackTimeSheetBundle:TypeContrat')->findAll();

        return $this->render('BallackTimeSheetBundle:typecontrat:index.html.twig', array(
            'typeContrats' => $typeContrats,
        ));
    }

    /**
     * Creates a new typeContrat entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeContrat = new Typecontrat();
        $form = $this->createForm('Ballack\TimeSheetBundle\Form\TypeContratType', $typeContrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeContrat);
            $em->flush();

            return $this->redirectToRoute('typecontrat_show', array('id' => $typeContrat->getId()));
        }

        return $this->render('BallackTimeSheetBundle:typecontrat:new.html.twig', array(
            'typeContrat' => $typeContrat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeContrat entity.
     *
     */
    public function showAction(TypeContrat $typeContrat)
    {
        $deleteForm = $this->createDeleteForm($typeContrat);

        return $this->render('BallackTimeSheetBundle:typecontrat:show.html.twig', array(
            'typeContrat' => $typeContrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeContrat entity.
     *
     */
    public function editAction(Request $request, TypeContrat $typeContrat)
    {
        $deleteForm = $this->createDeleteForm($typeContrat);
        $editForm = $this->createForm('Ballack\TimeSheetBundle\Form\TypeContratType', $typeContrat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typecontrat_edit', array('id' => $typeContrat->getId()));
        }

        return $this->render('BallackTimeSheetBundle:typecontrat:edit.html.twig', array(
            'typeContrat' => $typeContrat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeContrat entity.
     *
     */
    public function deleteAction(Request $request, TypeContrat $typeContrat)
    {
        $form = $this->createDeleteForm($typeContrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeContrat);
            $em->flush();
        }

        return $this->redirectToRoute('typecontrat_index');
    }

    /**
     * Creates a form to delete a typeContrat entity.
     *
     * @param TypeContrat $typeContrat The typeContrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeContrat $typeContrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typecontrat_delete', array('id' => $typeContrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
