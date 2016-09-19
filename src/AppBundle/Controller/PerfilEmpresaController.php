<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\PerfilEmpresa;
use AppBundle\Form\PerfilEmpresaType;

/**
 * PerfilEmpresa controller.
 *
 * @Route("/perfilempresa")
 */
class PerfilEmpresaController extends Controller
{
    /**
     * Lists all PerfilEmpresa entities.
     *
     * @Route("/", name="perfilempresa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $perfilEmpresas = $em->getRepository('AppBundle:PerfilEmpresa')->findAll();

        return $this->render('perfilempresa/index.html.twig', array(
            'perfilEmpresas' => $perfilEmpresas,
        ));
    }

    /**
     * Creates a new PerfilEmpresa entity.
     *
     * @Route("/new", name="perfilempresa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $perfilEmpresa = new PerfilEmpresa();
        $form = $this->createForm('AppBundle\Form\PerfilEmpresaType', $perfilEmpresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($perfilEmpresa);
            $em->flush();

            return $this->redirectToRoute('perfilempresa_show', array('id' => $perfilEmpresa->getIdPerfilEmpresa()));
        }

        return $this->render('perfilempresa/new.html.twig', array(
            'perfilEmpresa' => $perfilEmpresa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PerfilEmpresa entity.
     *
     * @Route("/{id}", name="perfilempresa_show")
     * @Method("GET")
     */
    public function showAction(PerfilEmpresa $perfilEmpresa)
    {
        $deleteForm = $this->createDeleteForm($perfilEmpresa);

        return $this->render('perfilempresa/show.html.twig', array(
            'perfilEmpresa' => $perfilEmpresa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PerfilEmpresa entity.
     *
     * @Route("/{id}/edit", name="perfilempresa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PerfilEmpresa $perfilEmpresa)
    {
        $deleteForm = $this->createDeleteForm($perfilEmpresa);
        $editForm = $this->createForm('AppBundle\Form\PerfilEmpresaType', $perfilEmpresa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($perfilEmpresa);
            $em->flush();

            return $this->redirectToRoute('perfilempresa_edit', array('id' => $perfilEmpresa->getIdPerfilEmpresa()));
        }

        return $this->render('perfilempresa/edit.html.twig', array(
            'perfilEmpresa' => $perfilEmpresa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PerfilEmpresa entity.
     *
     * @Route("/{id}", name="perfilempresa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PerfilEmpresa $perfilEmpresa)
    {
        $form = $this->createDeleteForm($perfilEmpresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($perfilEmpresa);
            $em->flush();
        }

        return $this->redirectToRoute('perfilempresa_index');
    }

    /**
     * Creates a form to delete a PerfilEmpresa entity.
     *
     * @param PerfilEmpresa $perfilEmpresa The PerfilEmpresa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PerfilEmpresa $perfilEmpresa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('perfilempresa_delete', array('id' => $perfilEmpresa->getIdPerfilEmpresa())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
