<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\diplome;
use Admin\Bundle\Form\diplomeType;

/**
 * diplome controller.
 *
 */
class diplomeController extends Controller
{

    /**
     * Lists all diplome entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:diplome')->findAll();

        return $this->render('AdmiScoBundle:diplome:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new diplome entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new diplome();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('diplome_show', array('id' => $entity->getId())));
        }

        return $this->render('AdmiScoBundle:diplome:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a diplome entity.
     *
     * @param diplome $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(diplome $entity)
    {
        $form = $this->createForm(new diplomeType(), $entity, array(
            'action' => $this->generateUrl('diplome_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new diplome entity.
     *
     */
    public function newAction()
    {
        $entity = new diplome();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdmiScoBundle:diplome:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a diplome entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:diplome:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing diplome entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find diplome entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:diplome:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a diplome entity.
    *
    * @param diplome $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(diplome $entity)
    {
        $form = $this->createForm(new diplomeType(), $entity, array(
            'action' => $this->generateUrl('diplome_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing diplome entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('diplome_edit', array('id' => $id)));
        }

        return $this->render('AdmiScoBundle:diplome:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a diplome entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdmiScoBundle:diplome')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find diplome entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('diplome'));
    }

    /**
     * Creates a form to delete a diplome entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('diplome_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
