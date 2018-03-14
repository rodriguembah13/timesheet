<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ballack\TimeSheetBundle\Entity\Employe;
use Ballack\TimeSheetBundle\Form\EmployeType;
use Symfony\Component\HttpFoundation\JsonResponse;

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
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('BallackTimeSheetBundle:Employe')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($employes, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/, 3/*limit per page*/);

        return $this->render('BallackTimeSheetBundle:employe:index.html.twig', array(
            'employes' => $employes, 'pagination' => $pagination,
        ));
    }

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('BallackTimeSheetBundle:Employe')->findByNom($this->getRequest()->get('nom'));

        $resp = new JsonResponse();
        return $resp->setData(array('employes' => $employes->getNom()));
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
            $em->persist($employe->getCompte());
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
            ->getForm();
    }

    public function roleAction(Employe $employe) {
        $em = $this->getDoctrine()->getManager();
        $user = $employe->getCompte();
        $form = $this->createFormBuilder($user)
            ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'options' => array(
                        'choices' => array(
                            'ROLE_ADMIN' => 'ROLE_ADMIN', 'ROLE_USER' => 'ROLE_USER', 'ROLE_CHEF' => 'ROLE_CHEF')
                    ), 'allow_add' => FALSE,
                    'allow_delete' => true
                )
            )
            ->getForm();
        $aray = ['ROLE_ADMIN', 'ROLE_USER', 'ROLE_CHEF'];

        return $this->render('BallackTimeSheetBundle:Default:role.html.twig', array(
            'form' => $form->createView(), 'user' => $user, 'ras' => $aray));
    }
    public function addRoleAction(Employe $employe, $role) {
        $em = $this->getDoctrine()->getManager();
        //$userManager = $this->get('fos_user.user_manager');
        $user = $employe->getCompte();
        /*$user->addRole($role);*/
        if (!$user) {
            //throw new NotFoundHttpException("Film non trouvé");
            throw $this->createNotFoundException('inexistant');
        }
        $em->persist($employe->getCompte()->addRole($role));
        $em->flush();
        //$userManager->updateUser($user);


        return $this->redirect($this->generateUrl('employe_index', array('id' => $employe->getId(),
            )));
    }
    public function deleteRoleAction($id, $role) {

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $user->removeRole($role);
        if (!$user) {
            //throw new NotFoundHttpException("Film non trouvé");
            throw $this->createNotFoundException('inexistant');
        }
        $userManager->updateUser($user);


        return $this->redirect($this->generateUrl('employe_index'));
    }
}