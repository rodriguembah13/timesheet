<?php

namespace Ballack\TimeSheetBundle\Controller;

use Ballack\TimeSheetBundle\Entity\OverTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Overtime controller.
 *
 */
class OverTimeController extends Controller {

    /**
     * Lists all overTime entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findAll();

        return $this->render('BallackTimeSheetBundle:overtime:index.html.twig', array(
                    'overTimes' => $overTimes,
        ));
    }

    public function mesOvertimeAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('Security.context')->gettoken()->getuser();
        $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findByEmploye($emp);

        return $this->render('BallackTimeSheetBundle:overtime:mesOvertime.html.twig', array(
                    'overTimes' => $overTimes,
        ));
    }
    public function validation_overtimeAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('Security.context')->gettoken()->getuser();
        $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findAllOvertimeByDepartement($emp->getDepartement());

        return $this->render('BallackTimeSheetBundle:overtime:validation_overtime.html.twig', array(
            'overTimes' => $overTimes,
        ));
    }
    /**
     * Creates a new overTime entity.
     *
     */
    public function newAction(Request $request) {
        $overTime = new Overtime();
        $form = $this->createForm('Ballack\TimeSheetBundle\Form\OverTimeType', $overTime);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->get('Security.context')->gettoken()->getuser();
            $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
            $overTime->setEmploye($emp);
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
    public function showAction(OverTime $overTime) {
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
    public function editAction(Request $request, OverTime $overTime) {
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
    public function deleteAction(Request $request, OverTime $overTime) {
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
    private function createDeleteForm(OverTime $overTime) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('overtime_delete', array('id' => $overTime->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
public function validation_OkAction(OverTime $overtime)
    {

        //$util = new Util();
        $em = $this->getDoctrine()->getManager();
        $employe=$overtime->getEmploye();
        $employe->setOvertime($employe->getOvertime()+$overtime->getDuree());
//        
//        $temp= $util->to_seconds($absence->getEndDate()->diff($absence->getStartDate()));
//        $nbre=$temp/(3600*24);
//        $nbrejoursNonOuvrable=$util->NbJoursNonOuvrable($absence->getEndDate(),$absence->getStartDate());
//        if($absence->getEmploye()->getSoldeVacances() >= ($nbre-$nbrejoursNonOuvrable)){
//            if ($absence->getStatut() == false) {
//
//
//                $absence->getEmploye()->setSoldeVacances($absence->getEmploye()->getSoldeVacances()-($nbre-$nbrejoursNonOuvrable));
//                $absence->setStatut(true);
//                $this->get('session')->getFlashBag()
//                    ->add('notice', array('type' => 'success', 'title' => 'Done!', 'message' => 'OK! It is done!'));
//            } else {
//                $absence->setStatut(false);
//                $this->get('session')->getFlashBag()
//                    ->add('notice', array('type' => 'danger', 'title' => 'Echec!', 'message' => 'Operation a echoue!'));
//            }
//        }else{
//            $absence->setStatut(false);
//            $this->get('session')->getFlashBag()
//                ->add('notice', array('type' => 'danger', 'title' => 'Echec!', 'message' => 'Operation a echoue!soldes vacances insufissant'));
//        }
        if($overtime->getStatut()!="accepte"){
          $overtime->setStatut("accepte");
            $this->get('session')->getFlashBag()
                 ->add('notice', array('type' => 'success', 'title' => 'Done!', 'message' => 'OK! It is done!'));
        }
        
        $em->persist($overtime);
         $em->persist($employe);
        $em->flush();

        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findAll();

        return $this->redirectToRoute('overtime_index', array('overTimes' => $overTimes));
    }
    public function validation_NonOkAction(OverTime $overtime){
        $em = $this->getDoctrine()->getManager();
        $employe=$overtime->getEmploye();
        //$employe->setOvertime($employe->getOvertime()+$overtime->getDuree());
        if($overtime->getStatut()=="accepte"){
            $overtime->setStatut("rejete");
            $employe->setOvertime($employe->getOvertime()-$overtime->getDuree());
            $this->get('session')->getFlashBag()
                ->add('notice', array('type' => 'success', 'title' => 'Done!', 'message' => 'OK! It is done!heure supplementaire diminue'));
        }else{
            $overtime->setStatut("rejete");
            $this->get('session')->getFlashBag()
                ->add('notice', array('type' => 'success', 'title' => 'Done!', 'message' => 'OK! It is done!'));
        }

        $em->persist($overtime);
        $em->persist($employe);
        $em->flush();

        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findAll();
        return $this->redirectToRoute('overtime_index', array('overTimes' => $overTimes));
    }
    public function validation_AttenteAction(OverTime $overtime){
        $em = $this->getDoctrine()->getManager();
        if($overtime->getStatut()!="attente"){
            $overtime->setStatut("attente");
        }

        $em->persist($overtime);
        $em->flush();

        $overTimes = $em->getRepository('BallackTimeSheetBundle:OverTime')->findAll();


        return $this->redirectToRoute('overtime_index', array('overTimes' => $overTimes));
    }
}
