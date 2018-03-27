<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ballack\TimeSheetBundle\Entity\TypeAbsence;
use Ballack\TimeSheetBundle\Form\TypeAbsenceType;

/**
 * TypeAbsence controller.
 *
 */
class TypeAbsenceController extends Controller
{
    /**
     * Lists all TypeAbsence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeAbsences = $em->getRepository('BallackTimeSheetBundle:TypeAbsence')->findAll();

        return $this->render('BallackTimeSheetBundle:typeabsence:index.html.twig', array(
            'typeAbsences' => $typeAbsences,
        ));
    }

    /**
     * Creates a new TypeAbsence entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeAbsence = new TypeAbsence();
        $form = $this->createForm(new TypeAbsenceType(), $typeAbsence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeAbsence);
            $em->flush();

            return $this->redirectToRoute('typeabsence_show', array('id' => $typeAbsence->getId()));
        }

        return $this->render('BallackTimeSheetBundle:typeabsence:new.html.twig', array(
            'typeAbsence' => $typeAbsence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeAbsence entity.
     *
     */
    public function showAction(TypeAbsence $typeAbsence)
    {
        $deleteForm = $this->createDeleteForm($typeAbsence);

        return $this->render('BallackTimeSheetBundle:typeabsence:show.html.twig', array(
            'typeAbsence' => $typeAbsence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeAbsence entity.
     *
     */
    public function editAction(Request $request, TypeAbsence $typeAbsence)
    {
        $deleteForm = $this->createDeleteForm($typeAbsence);
        $editForm = $this->createForm(new TypeAbsenceType(), $typeAbsence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeAbsence);
            $em->flush();

            return $this->redirectToRoute('typeabsence_edit', array('id' => $typeAbsence->getId()));
        }

        return $this->render('BallackTimeSheetBundle:typeabsence:edit.html.twig', array(
            'typeAbsence' => $typeAbsence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeAbsence entity.
     *
     */
    public function deleteAction(Request $request, TypeAbsence $typeAbsence)
    {
        $form = $this->createDeleteForm($typeAbsence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeAbsence);
            $em->flush();
        }

        return $this->redirectToRoute('typeabsence_index');
    }

    /**
     * Creates a form to delete a TypeAbsence entity.
     *
     * @param TypeAbsence $typeAbsence The TypeAbsence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeAbsence $typeAbsence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeabsence_delete', array('id' => $typeAbsence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
