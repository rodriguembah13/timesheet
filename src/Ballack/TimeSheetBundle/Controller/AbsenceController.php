<?php

namespace Ballack\TimeSheetBundle\Controller;

use Ballack\TimeSheetBundle\Entity\Employe;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ballack\TimeSheetBundle\Entity\Absence;
use Ballack\TimeSheetBundle\Form\AbsenceType;

/**
 * Absence controller.
 *
 * @Route("/absence")
 */
class AbsenceController extends Controller
{
    /**
     * Lists all Absence entities.
     *
     * @Route("/", name="absence_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $absences = $em->getRepository('BallackTimeSheetBundle:Absence')->findAll();

        return $this->render('BallackTimeSheetBundle:Absence:index.html.twig', array(
            'absences' => $absences,
        ));
    }
    public function validationAction()
    {

        $em = $this->getDoctrine()->getManager();
        $user= $this->get('Security.context')->gettoken()->getuser();
        $emp=$em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
        $absences='';
        if($emp->getIsChef()==true){
            $absences = $em->getRepository('BallackTimeSheetBundle:Absence')->findAllAbsencebyNotValidByDepartement($emp->getDepartement());
        }
        return $this->render('BallackTimeSheetBundle:Absence:index.html.twig', array(
            'absences' => $absences,
        ));
    }
    public function myAbsenceAction(){
        $em = $this->getDoctrine()->getManager();
        $usermanager=$this->get('fos_user.user_manager');
        $user= $this->get('Security.context')->gettoken()->getuser();
        $user1=$usermanager->findUserByUsername($user);
        //$emp=$em->getRepository('BallackTimeSheetBundle:Employe')->findBy(array('compte'=>$user1));
        $emp=$em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($usermanager->findUserByUsername($user));
        $absences = $em->getRepository('BallackTimeSheetBundle:Absence')->findByEmploye($emp);

        return $this->render('BallackTimeSheetBundle:Absence:myAbsence.html.twig', array(
            'absences' => $absences,'user' => $emp,
        ));
    }
    /**
     * Creates a new Absence entity.
     *
     * @Route("/new", name="absence_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $absence = new Absence();
        $form = $this->createForm(new AbsenceType(), $absence);
        $form->handleRequest($request);
        $usermanager=$this->get('fos_user.user_manager');
        $user= $this->get('Security.context')->gettoken()->getuser();
        $user1=$usermanager->findUserByUsername($user);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $emp=$em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user1);
            $absence->setEmploye($emp);
            $em->persist($absence);
            $em->flush();

            return $this->redirectToRoute('absence_show', array('id' => $absence->getId()));
        }

        return $this->render('BallackTimeSheetBundle:Absence:new.html.twig', array(
            'absence' => $absence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Absence entity.
     *
     * @Route("/{id}", name="absence_show")
     * @Method("GET")
     */
    public function showAction(Absence $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);

        return $this->render('BallackTimeSheetBundle:Absence:show.html.twig', array(
            'absence' => $absence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Absence entity.
     *
     * @Route("/{id}/edit", name="absence_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Absence $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm(new AbsenceType(), $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($absence);
            $em->flush();

            return $this->redirectToRoute('absence_edit', array('id' => $absence->getId()));
        }

        return $this->render('BallackTimeSheetBundle:Absence:edit.html.twig', array(
            'absence' => $absence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Absence entity.
     *
     * @Route("/{id}", name="absence_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Absence $absence)
    {
        $form = $this->createDeleteForm($absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($absence);
            $em->flush();
        }

        return $this->redirectToRoute('absence_index');
    }

    /**
     * Creates a form to delete a Absence entity.
     *
     * @param Absence $absence The Absence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Absence $absence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('absence_delete', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}