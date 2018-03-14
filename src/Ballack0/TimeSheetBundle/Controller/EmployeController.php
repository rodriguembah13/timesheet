<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ballack\TimeSheetBundle\Entity\Employe;
use Ballack\TimeSheetBundle\Form\EmployeType;

/**
 * Employe controller.
 *
 */
class EmployeController extends Controller
{
    /**
     * Lists all Employe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('BallackTimeSheetBundle:Employe')->findAll();

        return $this->render('BallackTimeSheetBundle:employe:index.html.twig', array(
            'employes' => $employes,
        ));
    }
    public function searchAction(Request $request)
    {
        $mot_cle = $request->request->get('mot_cle');
        if(!empty($mot_cle)){
            $em = $this->getDoctrine()->getManager();

            $employes = $em->getRepository('BallackTimeSheetBundle:Employe')->findByName($mot_cle);
        }


        return $this->render('BallackTimeSheetBundle:employe:index.html.twig', array(
            'employes' => $employes,
        ));
    }
    /**
     * Creates a new Employe entity.
     *
     */
    public function newAction(Request $request)
    {
        $employe = new Employe();
        $form = $this->createForm(new EmployeType(), $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();

            return $this->redirectToRoute('employe_show', array('id' => $employe->getId()));
        }

        return $this->render('BallackTimeSheetBundle:employe:new.html.twig', array(
            'employe' => $employe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employe entity.
     *
     */
    public function showAction(Employe $employe)
    {
        $deleteForm = $this->createDeleteForm($employe);

        return $this->render('BallackTimeSheetBundle:employe:show.html.twig', array(
            'employe' => $employe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Employe entity.
     *
     */
    public function editAction(Request $request, Employe $employe)
    {
        $deleteForm = $this->createDeleteForm($employe);
        $editForm = $this->createForm(new EmployeType(), $employe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();

            return $this->redirectToRoute('employe_edit', array('id' => $employe->getId()));
        }

        return $this->render('BallackTimeSheetBundle:employe:edit.html.twig', array(
            'employe' => $employe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Employe entity.
     *
     */
    public function deleteAction(Request $request, Employe $employe)
    {
        $form = $this->createDeleteForm($employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($employe);
            $em->flush();
        }

        return $this->redirectToRoute('employe_index');
    }

    /**
     * Creates a form to delete a Employe entity.
     *
     * @param Employe $employe The Employe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Employe $employe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employe_delete', array('id' => $employe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
