<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\niveau;
use Admin\Bundle\Form\niveauType;

/**
 * niveau controller.
 *
 */
class niveauController extends Controller
{

    /**
     * Lists all niveau entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:niveau')->findAll();

        return $this->render('AdmiScoBundle:niveau:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new niveau entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new niveau();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('niveau_show', array('id' => $entity->getId())));
        }

        return $this->render('AdmiScoBundle:niveau:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a niveau entity.
     *
     * @param niveau $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(niveau $entity)
    {
        $form = $this->createForm(new niveauType(), $entity, array(
            'action' => $this->generateUrl('niveau_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new niveau entity.
     *
     */
    public function newAction()
    {
        $entity = new niveau();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdmiScoBundle:niveau:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a niveau entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:niveau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find niveau entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:niveau:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing niveau entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:niveau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find niveau entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:niveau:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a niveau entity.
    *
    * @param niveau $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(niveau $entity)
    {
        $form = $this->createForm(new niveauType(), $entity, array(
            'action' => $this->generateUrl('niveau_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing niveau entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:niveau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find niveau entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('niveau_edit', array('id' => $id)));
        }

        return $this->render('AdmiScoBundle:niveau:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a niveau entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdmiScoBundle:niveau')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find niveau entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('niveau'));
    }

    /**
     * Creates a form to delete a niveau entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveau_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
