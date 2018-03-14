<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ballack\TimeSheetBundle\Entity\Departement;
use Ballack\TimeSheetBundle\Form\DepartementType;

/**
 * Departement controller.
 *
 */
class DepartementController extends Controller
{
    /**
     * Lists all Departement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $departements = $em->getRepository('BallackTimeSheetBundle:Departement')->findAll();

        return $this->render('BallackTimeSheetBundle:departement:index.html.twig', array(
            'departements' => $departements,
        ));
    }

    /**
     * Creates a new Departement entity.
     *
     */
    public function newAction(Request $request)
    {
        $departement = new Departement();
        $form = $this->createForm(new DepartementType(), $departement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($departement);
            $em->flush();

            return $this->redirectToRoute('departement_show', array('id' => $departement->getId()));
        }

        return $this->render('BallackTimeSheetBundle:departement:new.html.twig', array(
            'departement' => $departement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Departement entity.
     *
     */
    public function showAction(Departement $departement)
    {
        $deleteForm = $this->createDeleteForm($departement);

        return $this->render('BallackTimeSheetBundle:departement:show.html.twig', array(
            'departement' => $departement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Departement entity.
     *
     */
    public function editAction(Request $request, Departement $departement)
    {
        $deleteForm = $this->createDeleteForm($departement);
        $editForm = $this->createForm(new DepartementType(), $departement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($departement);
            $em->flush();

            return $this->redirectToRoute('departement_edit', array('id' => $departement->getId()));
        }

        return $this->render('BallackTimeSheetBundle:departement:edit.html.twig', array(
            'departement' => $departement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Departement entity.
     *
     */
    public function deleteAction(Request $request, Departement $departement)
    {
        $form = $this->createDeleteForm($departement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($departement);
            $em->flush();
        }

        return $this->redirectToRoute('departement_index');
    }

    /**
     * Creates a form to delete a Departement entity.
     *
     * @param Departement $departement The Departement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Departement $departement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('departement_delete', array('id' => $departement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
