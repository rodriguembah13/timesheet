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
     * @return array
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('BallackTimeSheetBundle:TypeAbsence')->findAll();

        return array('users' => $users);
    }

    /**
     * @param User $user
     * @return array
     */
    public function getUserAction(User $user)
    {
        return array('user' => $user);
    }
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
