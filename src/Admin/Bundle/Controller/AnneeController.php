<?php

namespace Admin\Bundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\Annee;

/**
 * Annee controller.
 *
 */
class AnneeController extends Controller
{

    /**
     * Lists all Annee entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:Annee')->findAll();

        return $this->render('AdmiScoBundle:Annee:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Annee entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:Annee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annee entity.');
        }

        return $this->render('AdmiScoBundle:Annee:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
