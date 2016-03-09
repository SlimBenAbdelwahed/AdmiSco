<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\groupe;
use Admin\Bundle\Form\groupeType;

/**
 * groupe controller.
 *
 */
class groupeController extends Controller
{

    /**
     * Lists all groupe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:groupe')->findAll();

        return $this->render('AdmiScoBundle:groupe:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new groupe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new groupe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('groupe_show', array('id' => $entity->getId())));
        }

        return $this->render('AdmiScoBundle:groupe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a groupe entity.
     *
     * @param groupe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(groupe $entity)
    {
        $form = $this->createForm(new groupeType(), $entity, array(
            'action' => $this->generateUrl('groupe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new groupe entity.
     *
     */
    public function newAction()
    {
        $entity = new groupe();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdmiScoBundle:groupe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a groupe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:groupe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find groupe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:groupe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing groupe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:groupe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find groupe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:groupe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a groupe entity.
    *
    * @param groupe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(groupe $entity)
    {
        $form = $this->createForm(new groupeType(), $entity, array(
            'action' => $this->generateUrl('groupe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing groupe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:groupe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find groupe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('groupe_edit', array('id' => $id)));
        }

        return $this->render('AdmiScoBundle:groupe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a groupe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdmiScoBundle:groupe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find groupe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('groupe'));
    }

    /**
     * Creates a form to delete a groupe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groupe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
