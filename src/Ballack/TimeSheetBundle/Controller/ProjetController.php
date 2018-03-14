<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ballack\TimeSheetBundle\Entity\Projet;
use Ballack\TimeSheetBundle\Form\ProjetType;

/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{
    /**
     * Lists all Projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projets = $em->getRepository('BallackTimeSheetBundle:Projet')->findAll();

        return $this->render('BallackTimeSheetBundle:projet:index.html.twig', array(
            'projets' => $projets,
        ));
    }

    /**
     * Creates a new Projet entity.
     *
     */
    public function newAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm(new ProjetType(), $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('projet_show', array('id' => $projet->getId()));
        }

        return $this->render('BallackTimeSheetBundle:projet:new.html.twig', array(
            'projet' => $projet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Projet entity.
     *
     */
    public function showAction(Projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);

        return $this->render('BallackTimeSheetBundle:projet:show.html.twig', array(
            'projet' => $projet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projet entity.
     *
     */
    public function editAction(Request $request, Projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);
        $editForm = $this->createForm(new ProjetType(), $projet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('projet_edit', array('id' => $projet->getId()));
        }

        return $this->render('BallackTimeSheetBundle:projet:edit.html.twig', array(
            'projet' => $projet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Projet entity.
     *
     */
    public function deleteAction(Request $request, Projet $projet)
    {
        $form = $this->createDeleteForm($projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush();
        }

        return $this->redirectToRoute('projet_index');
    }

    /**
     * Creates a form to delete a Projet entity.
     *
     * @param Projet $projet The Projet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Projet $projet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projet_delete', array('id' => $projet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
