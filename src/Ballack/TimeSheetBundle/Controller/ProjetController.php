<?php

namespace Ballack\TimeSheetBundle\Controller;

use Ballack\TimeSheetBundle\Entity\Employe;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ballack\TimeSheetBundle\Entity\Projet;
use Ballack\TimeSheetBundle\Form\ProjetType;
use Ballack\TimeSheetBundle\Form\ProjetEmployeType;

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
    public function mesProjetAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('Security.context')->gettoken()->getuser();
        $emp = $em->getRepository('BallackTimeSheetBundle:Employe')->findOneByCompte($user);
        $myProjets=new \Doctrine\Common\Collections\ArrayCollection();
        $projets = $em->getRepository('BallackTimeSheetBundle:Projet')->findAll();
        foreach ($projets as $projet){

            $employes =$projet->getEmployes();
            if($employes->contains($emp)){
                $myProjets->add($projet);
            }
        }
        return $this->render('BallackTimeSheetBundle:projet:index.html.twig', array(
            'projets' => $myProjets,
        ));
    }
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
            /*'delete_form' => $deleteForm->createView(),*/
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
    public function addEmpToProjetAction(Employe $employe,Projet $projet)
    {

        $em = $this->getDoctrine()->getManager();
        $projet->getEmployes()->addEmploye($employe);
        $em->persist($projet);
        $em->flush();

        return $this->render('BallackTimeSheetBundle:projet:index.html.twig', array(
            'projet' => $projet,

        ));
    }
/*    public function affectationAction(Request $request,Projet $projet)
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('BallackTimeSheetBundle:Employe')->findAll();


        return $this->render('BallackTimeSheetBundle:projet:affectationProjet.html.twig', array(
            'employes' => $employes,'projet'=>$projet,
        ));
    }*/


    public function affectationAction(Request $request,Projet $projet)

    {

        //On crée le FormBuilder grâce à la méthode du contrôleur. Toujours sans entité

        $form = $this->createForm(new ProjetEmployeType());

        //On récupère la requête

            $form->handleRequest($request);

            //On vérifie que les valeurs entrées sont correctes

            if ($form->isSubmitted() && $form->isValid())

            {

                $em = $this->getDoctrine()->getManager();

                //On récupère les données entrées dans le formulaire par l'utilisateur

                //$data = $this->getRequest()->request->get('projetemploye');
                 $data= $form->getData();
                //On va récupérer la méthode dans le repository afin de trouver toutes les annonces filtrées par les paramètres du formulaire

                //$liste_annonces = $em->getRepository('HurricaneScriptAnnonceBundle:Annonce')->findAnnonceByParametres($data);
                foreach($data as $i){

                    $projet->addEmploye($i);

                }
                //Puis on redirige vers la page de visualisation de cette liste d'annonces
                $em->persist($projet);
                $em->flush();
                return $this->render('BallackTimeSheetBundle:projet:show.html.twig', array(
                    'projet' => $projet,'data'=>$data,

                ));

            }



        // À ce stade :

        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire

        // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('BallackTimeSheetBundle:projet:affectationProjet.html.twig', array(
            'projet'=>$projet,'form' => $form->createView()
        ));
    }

}
