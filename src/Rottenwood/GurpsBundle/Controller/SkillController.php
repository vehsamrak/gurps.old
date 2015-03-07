<?php

namespace Rottenwood\GurpsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rottenwood\GurpsBundle\Entity\Skill;
use Rottenwood\GurpsBundle\Form\SkillType;

/**
 * Skill controller.
 * @Route("/skill")
 */
class SkillController extends Controller {

    /**
     * Lists all Skill entities.
     * @Route("/", name="skill")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RottenwoodGurpsBundle:Skill')->findAll();

        return [
            'entities'        => $entities,
            'difficultyNames' => Skill::getDifficultyNames(),
            'attributeNames'  => Skill::getAttributeNames(),
        ];
    }

    /**
     * Creates a new Skill entity.
     * @Route("/", name="skill_create")
     * @Method("POST")
     * @Template("RottenwoodGurpsBundle:Skill:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Skill();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('skill_show', ['id' => $entity->getId()]));
        }

        return [
            'entity' => $entity,
            'form'   => $form->createView(),
        ];
    }

    /**
     * Creates a form to create a Skill entity.
     * @param Skill $entity The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Skill $entity) {
        $form = $this->createForm(new SkillType(),
                                  $entity,
                                  [
                                      'action' => $this->generateUrl('skill_create'),
                                      'method' => 'POST',
                                  ]);

        $form->add('submit', 'submit', ['label' => 'Create']);

        return $form;
    }

    /**
     * Displays a form to create a new Skill entity.
     * @Route("/new", name="skill_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Skill();
        $form = $this->createCreateForm($entity);

        return [
            'entity' => $entity,
            'form'   => $form->createView(),
        ];
    }

    /**
     * Finds and displays a Skill entity.
     * @Route("/{id}", name="skill_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RottenwoodGurpsBundle:Skill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return [
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ];
    }

    /**
     * Displays a form to edit an existing Skill entity.
     * @Route("/{id}/edit", name="skill_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RottenwoodGurpsBundle:Skill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ];
    }

    /**
     * Creates a form to edit a Skill entity.
     * @param Skill $entity The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Skill $entity) {
        $form = $this->createForm(new SkillType(),
                                  $entity,
                                  [
                                      'action' => $this->generateUrl('skill_update', ['id' => $entity->getId()]),
                                      'method' => 'PUT',
                                  ]);

        $form->add('submit', 'submit', ['label' => 'Update']);

        return $form;
    }

    /**
     * Edits an existing Skill entity.
     * @Route("/{id}", name="skill_update")
     * @Method("PUT")
     * @Template("RottenwoodGurpsBundle:Skill:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RottenwoodGurpsBundle:Skill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('skill'));
        }

        return [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ];
    }

    /**
     * Deletes a Skill entity.
     * @Route("/{id}", name="skill_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RottenwoodGurpsBundle:Skill')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Skill entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('skill'));
    }

    /**
     * Creates a form to delete a Skill entity by id.
     * @param mixed $id The entity id
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                    ->setAction($this->generateUrl('skill_delete', ['id' => $id]))
                    ->setMethod('DELETE')
                    ->add('submit', 'submit', ['label' => 'Delete'])
                    ->getForm();
    }
}
