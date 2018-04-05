<?php

namespace Ballack\TimeSheetBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
/**
 * Employe controller.
 *
 */
class EmployeRestController extends FOSRestController {
    /**
     * @ApiDoc(
     *    description="liste des employes",
     * output= { "class"=Ballack\TimeSheetBundle\Entity\Employe::class, "collection"=true, "groups"={"employes"} },
     * input={"class"=Ballack\TimeSheetBundle\Form\EmployeType::class, "name"=""},
     * statusCodes = {
     *        201 = "Création avec succès",
     *        400 = "Formulaire invalide"
     *    },
     *    responseMap={
     *         201 = {"class"=Ballack\TimeSheetBundle\Entity\Employe, "groups"={"employe"}},
     *         400 = { "class"=Ballack\TimeSheetBundle\Form\EmployeType::class, "form_errors"=true, "name" = ""}
     *    }
     * )
     * @Rest\Get("/employe_index_rest", name="employe_list")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('BallackTimeSheetBundle:Employe')->findAll();

        $formatted = [];
        foreach ($employes as $employe) {
            $formatted[] = [
                'id' => $employe->getId(),
                'nom' => $employe->getNom(),
                'prenom' => $employe->getPrenom(),
                'photo'=>$employe->getImage(),
            ];
        }
// Récupération du view handler
        $viewHandler = $this->get('fos_rest.view_handler');

        // Création d'une vue FOSRestBundle
        $view = View::create($formatted);
        $view->setFormat('json');

        // Gestion de la réponse
        return $viewHandler->handle($view);
    }

}