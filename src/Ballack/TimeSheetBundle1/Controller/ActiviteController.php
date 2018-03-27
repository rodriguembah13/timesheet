<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ballack\TimeSheetBundle\Entity\Projet;
use Ballack\TimeSheetBundle\Entity\Employe;
use Ballack\TimeSheetBundle\Entity\Activite;
use Ballack\TimeSheetBundle\Form\ActiviteType;

/**
 * Activite controller.
 *
 */
class ActiviteController extends Controller {

    /**
     * Lists all Activite entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $activites = $em->getRepository('BallackTimeSheetBundle:Activite')->findAll();

        return $this->render('BallackTimeSheetBundle:activite:index.html.twig', array(
                    'activites' => $activites,
        ));
    }
   public function myDetailActiviteAction(Employe $employe) {
        $em = $this->getDoctrine()->getManager();

        $activites = $em->getRepository('BallackTimeSheetBundle:Activite')->findByEmploye($employe);

        return $this->render('BallackTimeSheetBundle:activite:detail.html.twig', array(
                    'activites' => $activites,
        ));
    }
    /**
     * Lists all My Activite entities.
     *
     */
//    public function mesActiviteAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $activites = $em->getRepository('BallackTimeSheetBundle:Activite')->findAll();
//
//        return $this->render('BallackTimeSheetBundle:activite:mesActivites.html.twig', array(
//            'activites' => $activites,
//        ));
//    }
    /**
     * Creates a new Activite entity.
     *
     */
    public function newAction(Request $request) {
        $activite = new Activite();
        $form = $this->createForm(new ActiviteType(), $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->get('Security.context')->gettoken()->getuser();
            $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
            $activite->setEmploye($emp);
            $em->persist($activite);
            $em->flush();

            return $this->redirectToRoute('activite_show', array('id' => $activite->getId()));
        }

        return $this->render('BallackTimeSheetBundle:activite:new.html.twig', array(
                    'activite' => $activite,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Activite entity.
     *
     */
    public function showAction(Activite $activite) {
        $deleteForm = $this->createDeleteForm($activite);

        return $this->render('BallackTimeSheetBundle:activite:show.html.twig', array(
                    'activite' => $activite,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Activite entity.
     *
     */
    public function editAction(Request $request, Activite $activite) {
        $deleteForm = $this->createDeleteForm($activite);
        $editForm = $this->createForm(new ActiviteType(), $activite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();

            return $this->redirectToRoute('activite_edit', array('id' => $activite->getId()));
        }

        return $this->render('BallackTimeSheetBundle:activite:edit.html.twig', array(
                    'activite' => $activite,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function mesActiviteAction(Request $request, Projet $projet) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('Security.context')->gettoken()->getuser();
        $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
        $activites = $em->getRepository('BallackTimeSheetBundle:Activite')->findAllActivitebyEmployeByProjet($emp, $projet);
       // $activites = $emp->getActivites();
        return $this->render('BallackTimeSheetBundle:activite:mesActivites.html.twig', array(
                    'activites' => $activites,
        ));
    }

    /**
     * Deletes a Activite entity.
     *
     */
    public function deleteAction(Request $request, Activite $activite) {
        $form = $this->createDeleteForm($activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activite);
            $em->flush();
        }

        return $this->redirectToRoute('activite_index');
    }

    /**
     * Creates a form to delete a Activite entity.
     *
     * @param Activite $activite The Activite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Activite $activite) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('activite_delete', array('id' => $activite->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
