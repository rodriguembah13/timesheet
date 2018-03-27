<?php

namespace Ballack\TimeSheetBundle\Controller;

use Ballack\TimeSheetBundle\Entity\OverTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Overtime controller.
 *
 */
class OverTimeController extends Controller
{
    /**
     * Lists all overTime entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findAll();

        return $this->render('BallackTimeSheetBundle:overtime:index.html.twig', array(
            'overTimes' => $overTimes,
        ));
    }

    /**
     * Creates a new overTime entity.
     *
     */
    public function newAction(Request $request)
    {
        $overTime = new Overtime();
        $form = $this->createForm('Ballack\TimeSheetBundle\Form\OverTimeType', $overTime);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($overTime);
            $em->flush();

            return $this->redirectToRoute('overtime_show', array('id' => $overTime->getId()));
        }

        return $this->render('BallackTimeSheetBundle:overtime:new.html.twig', array(
            'overTime' => $overTime,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a overTime entity.
     *
     */
    public function showAction(OverTime $overTime)
    {
        $deleteForm = $this->createDeleteForm($overTime);

        return $this->render('BallackTimeSheetBundle:overtime:show.html.twig', array(
            'overTime' => $overTime,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing overTime entity.
     *
     */
    public function editAction(Request $request, OverTime $overTime)
    {
        $deleteForm = $this->createDeleteForm($overTime);
        $editForm = $this->createForm('Ballack\TimeSheetBundle\Form\OverTimeType', $overTime);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('overtime_edit', array('id' => $overTime->getId()));
        }

        return $this->render('BallackTimeSheetBundle:overtime:edit.html.twig', array(
            'overTime' => $overTime,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a overTime entity.
     *
     */
    public function deleteAction(Request $request, OverTime $overTime)
    {
        $form = $this->createDeleteForm($overTime);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($overTime);
            $em->flush();
        }

        return $this->redirectToRoute('overtime_index');
    }

    /**
     * Creates a form to delete a overTime entity.
     *
     * @param OverTime $overTime The overTime entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OverTime $overTime)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('overtime_delete', array('id' => $overTime->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
