<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ItensLote;
use AppBundle\Form\ItensLoteType;

/**
 * ItensLote controller.
 *
 * @Route("/itenslote")
 */
class ItensLoteController extends Controller
{
    /**
     * Lists all ItensLote entities.
     *
     * @Route("/", name="itenslote_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $itensLotes = $em->getRepository('AppBundle:ItensLote')->findAll();

        return $this->render('itenslote/index.html.twig', array(
            'itensLotes' => $itensLotes,
        ));
    }

    /**
     * Creates a new ItensLote entity.
     *
     * @Route("/new", name="itenslote_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $itensLote = new ItensLote();
        $form = $this->createForm('AppBundle\Form\ItensLoteType', $itensLote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($itensLote);
            $em->flush();

            return $this->redirectToRoute('itenslote_show', array('id' => $itensLote->getIdItensLote()));
        }

        return $this->render('itenslote/new.html.twig', array(
            'itensLote' => $itensLote,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ItensLote entity.
     *
     * @Route("/{id}", name="itenslote_show")
     * @Method("GET")
     */
    public function showAction(ItensLote $itensLote)
    {
        $deleteForm = $this->createDeleteForm($itensLote);

        return $this->render('itenslote/show.html.twig', array(
            'itensLote' => $itensLote,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ItensLote entity.
     *
     * @Route("/{id}/edit", name="itenslote_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ItensLote $itensLote)
    {
        $deleteForm = $this->createDeleteForm($itensLote);
        $editForm = $this->createForm('AppBundle\Form\ItensLoteType', $itensLote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($itensLote);
            $em->flush();

            return $this->redirectToRoute('itenslote_edit', array('id' => $itensLote->getIdItensLote()));
        }

        return $this->render('itenslote/edit.html.twig', array(
            'itensLote' => $itensLote,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ItensLote entity.
     *
     * @Route("/{id}", name="itenslote_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ItensLote $itensLote)
    {
        $form = $this->createDeleteForm($itensLote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($itensLote);
            $em->flush();
        }

        return $this->redirectToRoute('itenslote_index');
    }

    /**
     * Creates a form to delete a ItensLote entity.
     *
     * @param ItensLote $itensLote The ItensLote entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ItensLote $itensLote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('itenslote_delete', array('id' => $itensLote->getIdItensLote())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
