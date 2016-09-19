<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\LicencaUso;
use AppBundle\Form\LicencaUsoType;

/**
 * LicencaUso controller.
 *
 * @Route("/licenca")
 */
class LicencaUsoController extends Controller
{
    /**
     * Lists all LicencaUso entities.
     *
     * @Route("/", name="licenca_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $licencaUsos = $em->getRepository('AppBundle:LicencaUso')->findAll();

        return $this->render('licencauso/index.html.twig', array(
            'licencaUsos' => $licencaUsos,
        ));
    }

    /**
     * Creates a new LicencaUso entity.
     *
     * @Route("/new", name="licenca_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $licencaUso = new LicencaUso();
        $form = $this->createForm('AppBundle\Form\LicencaUsoType', $licencaUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($licencaUso);
            $em->flush();

            return $this->redirectToRoute('licenca_show', array('id' => $licencaUso->getIdLicencaUso()));
        }

        return $this->render('licencauso/new.html.twig', array(
            'licencaUso' => $licencaUso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LicencaUso entity.
     *
     * @Route("/{id}", name="licenca_show")
     * @Method("GET")
     */
    public function showAction(LicencaUso $licencaUso)
    {
        $deleteForm = $this->createDeleteForm($licencaUso);

        return $this->render('licencauso/show.html.twig', array(
            'licencaUso' => $licencaUso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing LicencaUso entity.
     *
     * @Route("/{id}/edit", name="licenca_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, LicencaUso $licencaUso)
    {
        $deleteForm = $this->createDeleteForm($licencaUso);
        $editForm = $this->createForm('AppBundle\Form\LicencaUsoType', $licencaUso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($licencaUso);
            $em->flush();

            return $this->redirectToRoute('licenca_edit', array('id' => $licencaUso->getIdLicencaUso()));
        }

        return $this->render('licencauso/edit.html.twig', array(
            'licencaUso' => $licencaUso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a LicencaUso entity.
     *
     * @Route("/{id}", name="licenca_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, LicencaUso $licencaUso)
    {
        $form = $this->createDeleteForm($licencaUso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($licencaUso);
            $em->flush();
        }

        return $this->redirectToRoute('licenca_index');
    }

    /**
     * Creates a form to delete a LicencaUso entity.
     *
     * @param LicencaUso $licencaUso The LicencaUso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LicencaUso $licencaUso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('licenca_delete', array('id' => $licencaUso->getIdLicencaUso())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
