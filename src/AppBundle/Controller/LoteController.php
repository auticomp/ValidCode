<?php 

namespace AppBundle\Controller;

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Lote;
use AppBundle\Form\LoteType;

/**
 * Lote controller.
 *
 * @Route("/lote")
 */
class LoteController extends Controller
{
    /**
     * Lists all Lote entities.
     *
     * @Route("/", name="lote_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lotes = $em->getRepository('AppBundle:Lote')->findAll();

        return $this->render('lote/index.html.twig', array(
            'lotes' => $lotes,
        ));
    }

    /**
     * Creates a new Lote entity.
     *
     * @Route("/new", name="lote_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
    	
    	
        $lote = new Lote();
        $form = $this->createForm('AppBundle\Form\LoteType', $lote);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($lote);
            $em->flush();

            return $this->redirectToRoute('lote_show', array('id' => $lote->getIdLote()));
        }

        return $this->render('lote/new.html.twig', array(
            'lote' => $lote,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Lote entity.
     *
     * @Route("/{id}", name="lote_show")
     * @Method("GET")
     */
    public function showAction(Lote $lote)
    {
        $deleteForm = $this->createDeleteForm($lote);

        return $this->render('lote/show.html.twig', array(
            'lote' => $lote,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Lote entity.
     *
     * @Route("/{id}/edit", name="lote_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lote $lote)
    {
        $deleteForm = $this->createDeleteForm($lote);
        $editForm = $this->createForm('AppBundle\Form\LoteType', $lote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lote);
            $em->flush();

            return $this->redirectToRoute('lote_edit', array('id' => $lote->getIdLote()));
        }

        return $this->render('lote/edit.html.twig', array(
            'lote' => $lote,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Lote entity.
     *
     * @Route("/{id}", name="lote_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lote $lote)
    {
        $form = $this->createDeleteForm($lote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lote);
            $em->flush();
        }

        return $this->redirectToRoute('lote_index');
    }

    /**
     * Creates a form to delete a Lote entity.
     *
     * @param Lote $lote The Lote entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lote $lote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lote_delete', array('id' => $lote->getIdLote())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
