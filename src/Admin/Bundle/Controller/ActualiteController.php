<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\Actualite;
use Admin\Bundle\Form\ActualiteType;

/**
 * Actualite controller.
 *
 */
class ActualiteController extends Controller
{

    /**
     * Lists all Actualite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:Actualite')->findAll();

        return $this->render('AdmiScoBundle:Actualite:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Actualite entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Actualite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actualite_show', array('id' => $entity->getId())));
        }

        return $this->render('AdmiScoBundle:Actualite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Actualite entity.
     *
     * @param Actualite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Actualite $entity)
    {
        $form = $this->createForm(new ActualiteType(), $entity, array(
            'action' => $this->generateUrl('actualite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Actualite entity.
     *
     */
    public function newAction()
    {
        $entity = new Actualite();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdmiScoBundle:Actualite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Actualite entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:Actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:Actualite:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Actualite entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:Actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:Actualite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Actualite entity.
    *
    * @param Actualite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Actualite $entity)
    {
        $form = $this->createForm(new ActualiteType(), $entity, array(
            'action' => $this->generateUrl('actualite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Actualite entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:Actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('actualite_edit', array('id' => $id)));
        }

        return $this->render('AdmiScoBundle:Actualite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Actualite entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdmiScoBundle:Actualite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Actualite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('actualite'));
    }

    /**
     * Creates a form to delete a Actualite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actualite_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
