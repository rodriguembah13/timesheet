<?php

namespace Ballack\TimeSheetBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Ballack\TimeSheetBundle\Entity\TypeAbsence;
use Ballack\TimeSheetBundle\Form\TypeAbsenceType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * TypeAbsence controller.
 *
 */
class TypeAbsenceRestController extends FOSRestController
{
    /**
     * @Rest\Get("/typeabsence_index_rest", name="app_article_list")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeAbsences = $em->getRepository('BallackTimeSheetBundle:TypeAbsence')->findAll();

        $formatted = [];
        foreach ($typeAbsences as $place) {
            $formatted[] = [
                'id' => $place->getId(),
                'libelle' => $place->getLibelle(),
                'address' => $place->getDecription(),
            ];
        }

        return new JsonResponse($formatted);
    }
    /**
     * @Rest\Get("/absence_rest", name="absence_rest_list")
     *
     */
    public function index2Action()
    {
        $em = $this->getDoctrine()->getManager();

        $typeAbsences = $em->getRepository('BallackTimeSheetBundle:Absence')->findAll();

        $formatted = [];
        foreach ($typeAbsences as $place) {

            if($place->getStatut()=='accepte'){
               $color='#257e4a';
            }elseif($place->getStatut()=='attente'){
                $color='#9E9E9E';
            }else{
                $color='#B71C1C';
            }
            $formatted[] = [
                'id' => $place->getId(),
                'start' =>date_format($place->getStartDate(),"Y-m-d H:i:s") ,
                'end' =>date_format($place->getEndDate(),"Y-m-d H:i:s"),
                'title'=> $place->getEmploye()->getNom(),
                'description'=>$place->getTypeAbsence()->getLibelle(),
                'color'=>$color,
            ];
        }

        return new JsonResponse($formatted);
    }
    /**
     * @Rest\Get("/absence_collegue_rest", name="absence_collegue_rest_list")
     *
     */
    public function getAbsenceByDepartementAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('Security.context')->gettoken()->getuser();
        $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
        $typeAbsences = $em->getRepository('BallackTimeSheetBundle:Absence')->findAllAbsencebyNotValidByDepartement($emp->getDepartement());

        $formatted = [];
        foreach ($typeAbsences as $place) {

            if($place->getStatut()=='accepte'){
                $color='#257e4a';
            }elseif($place->getStatut()=='attente'){
                $color='#9E9E9E';
            }else{
                $color='#B71C1C';
            }
            $formatted[] = [
                'id' => $place->getId(),
                'start' =>date_format($place->getStartDate(),"Y-m-d H:i:s") ,
                'end' =>date_format($place->getEndDate(),"Y-m-d H:i:s"),
                'title'=> $place->getEmploye()->getNom(),
                'description'=>$place->getTypeAbsence()->getLibelle(),
                'color'=>$color,
            ];
        }

        return new JsonResponse($formatted);
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
