<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\PerfilUsuario;
use AppBundle\Form\PerfilUsuarioType;

/**
 * PerfilUsuario controller.
 *
 * @Route("/perfilusuario")
 */
class PerfilUsuarioController extends Controller
{
    /**
     * Lists all PerfilUsuario entities.
     *
     * @Route("/", name="perfilusuario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $perfilUsuarios = $em->getRepository('AppBundle:PerfilUsuario')->findAll();

        return $this->render('perfilusuario/index.html.twig', array(
            'perfilUsuarios' => $perfilUsuarios,
        ));
    }

    /**
     * Creates a new PerfilUsuario entity.
     *
     * @Route("/new", name="perfilusuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $perfilUsuario = new PerfilUsuario();
        $form = $this->createForm('AppBundle\Form\PerfilUsuarioType', $perfilUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($perfilUsuario);
            $em->flush();

            return $this->redirectToRoute('perfilusuario_show', array('id' => $perfilUsuario->getId()));
        }

        return $this->render('perfilusuario/new.html.twig', array(
            'perfilUsuario' => $perfilUsuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PerfilUsuario entity.
     *
     * @Route("/{id}", name="perfilusuario_show")
     * @Method("GET")
     */
    public function showAction(PerfilUsuario $perfilUsuario)
    {
        $deleteForm = $this->createDeleteForm($perfilUsuario);

        return $this->render('perfilusuario/show.html.twig', array(
            'perfilUsuario' => $perfilUsuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PerfilUsuario entity.
     *
     * @Route("/{id}/edit", name="perfilusuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PerfilUsuario $perfilUsuario)
    {
        $deleteForm = $this->createDeleteForm($perfilUsuario);
        $editForm = $this->createForm('AppBundle\Form\PerfilUsuarioType', $perfilUsuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($perfilUsuario);
            $em->flush();

            return $this->redirectToRoute('perfilusuario_edit', array('id' => $perfilUsuario->getId()));
        }

        return $this->render('perfilusuario/edit.html.twig', array(
            'perfilUsuario' => $perfilUsuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PerfilUsuario entity.
     *
     * @Route("/{id}", name="perfilusuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PerfilUsuario $perfilUsuario)
    {
        $form = $this->createDeleteForm($perfilUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($perfilUsuario);
            $em->flush();
        }

        return $this->redirectToRoute('perfilusuario_index');
    }

    /**
     * Creates a form to delete a PerfilUsuario entity.
     *
     * @param PerfilUsuario $perfilUsuario The PerfilUsuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PerfilUsuario $perfilUsuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('perfilusuario_delete', array('id' => $perfilUsuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
