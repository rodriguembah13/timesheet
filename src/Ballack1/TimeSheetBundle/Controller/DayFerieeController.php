<?php

namespace Ballack\TimeSheetBundle\Controller;

use Ballack\TimeSheetBundle\Entity\DayFeriee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dayferiee controller.
 *
 */
class DayFerieeController extends Controller
{
    /**
     * Lists all dayFeriee entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dayFeriees = $em->getRepository('BallackTimeSheetBundle:DayFeriee')->findAll();

        return $this->render('BallackTimeSheetBundle:dayferiee:index.html.twig', array(
            'dayFeriees' => $dayFeriees,
        ));
    }

    /**
     * Creates a new dayFeriee entity.
     *
     */
    public function newAction(Request $request)
    {
        $dayFeriee = new Dayferiee();
        $form = $this->createForm('Ballack\TimeSheetBundle\Form\DayFerieeType', $dayFeriee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dayFeriee);
            $em->flush();

            return $this->redirectToRoute('dayferiee_show', array('id' => $dayFeriee->getId()));
        }

        return $this->render('BallackTimeSheetBundle:dayferiee:new.html.twig', array(
            'dayFeriee' => $dayFeriee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dayFeriee entity.
     *
     */
    public function showAction(DayFeriee $dayFeriee)
    {
        $deleteForm = $this->createDeleteForm($dayFeriee);

        return $this->render('BallackTimeSheetBundle:dayferiee:show.html.twig', array(
            'dayFeriee' => $dayFeriee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dayFeriee entity.
     *
     */
    public function editAction(Request $request, DayFeriee $dayFeriee)
    {
        $deleteForm = $this->createDeleteForm($dayFeriee);
        $editForm = $this->createForm('Ballack\TimeSheetBundle\Form\DayFerieeType', $dayFeriee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dayferiee_edit', array('id' => $dayFeriee->getId()));
        }

        return $this->render('BallackTimeSheetBundle:dayferiee:edit.html.twig', array(
            'dayFeriee' => $dayFeriee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dayFeriee entity.
     *
     */
    public function deleteAction(Request $request, DayFeriee $dayFeriee)
    {
        $form = $this->createDeleteForm($dayFeriee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dayFeriee);
            $em->flush();
        }

        return $this->redirectToRoute('dayferiee_index');
    }

    /**
     * Creates a form to delete a dayFeriee entity.
     *
     * @param DayFeriee $dayFeriee The dayFeriee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DayFeriee $dayFeriee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dayferiee_delete', array('id' => $dayFeriee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
