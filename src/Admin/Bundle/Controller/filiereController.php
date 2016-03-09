<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Bundle\Entity\filiere;
use Admin\Bundle\Form\filiereType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * filiere controller.
 *
 */
class filiereController extends Controller
{

    /**
     * Lists all filiere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdmiScoBundle:filiere')->findAll();

        return $this->render('AdmiScoBundle:filiere:index.html.twig', array(
            'entities' => $entities,
        ));
    }
       
    /**
     * Creates a new filiere entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new filiere();
        $form = $this->createCreateForm($entity);
       $form->handleRequest($request);
       

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filiere'));
        }

        return $this->render('AdmiScoBundle:filiere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a filiere entity.
     *
     * @param filiere $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(filiere $entity)
    {
        $form = $this->createForm(new filiereType(), $entity, array(
            'action' => $this->generateUrl('filiere_create'),
            'method' => 'POST',
        ));
        
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new filiere entity.
     *
     */
    public function newAction()
    {      
         $entity = new filiere();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdmiScoBundle:filiere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
        
    }

    /**
     * Finds and displays a filiere entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:filiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find filiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:filiere:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing filiere entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:filiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find filiere entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdmiScoBundle:filiere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a filiere entity.
    *
    * @param filiere $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(filiere $entity)
    {
        $form = $this->createForm(new filiereType(), $entity, array(
            'action' => $this->generateUrl('filiere_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing filiere entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdmiScoBundle:filiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find filiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('filiere_edit', array('id' => $id)));
        }

        return $this->render('AdmiScoBundle:filiere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a filiere entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdmiScoBundle:filiere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find filiere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('filiere'));
    }

    /**
     * Creates a form to delete a filiere entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('filiere_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
