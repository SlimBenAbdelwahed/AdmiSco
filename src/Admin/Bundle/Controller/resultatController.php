<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\resultat;
use Admin\Bundle\Form\resultatType;

/**
 * resultat controller.
 *
 */
class resultatController extends Controller
{

    /**
     * Lists all resultat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:resultat')->findAll();

        return $this->render('AdmiScoBundle:resultat:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new resultat entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new resultat();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('resultat_show', array('id' => $entity->getId())));
        }

        return $this->render('AdmiScoBundle:resultat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a resultat entity.
     *
     * @param resultat $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(resultat $entity)
    {
        $form = $this->createForm(new resultatType(), $entity, array(
            'action' => $this->generateUrl('resultat_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new resultat entity.
     *
     */
    public function newAction()
    {
        $entity = new resultat();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdmiScoBundle:resultat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a resultat entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:resultat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find resultat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:resultat:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing resultat entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:resultat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find resultat entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:resultat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a resultat entity.
    *
    * @param resultat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(resultat $entity)
    {
        $form = $this->createForm(new resultatType(), $entity, array(
            'action' => $this->generateUrl('resultat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing resultat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:resultat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find resultat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('resultat_edit', array('id' => $id)));
        }

        return $this->render('AdmiScoBundle:resultat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a resultat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdmiScoBundle:resultat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find resultat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('resultat'));
    }

    /**
     * Creates a form to delete a resultat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resultat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
