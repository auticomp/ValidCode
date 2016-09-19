<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArquivoLote;
use AppBundle\Form\ArquivoLoteType;
use AppBundle\Entity\ItensLote;
use AppBundle\Repository\ItensLoteRepository;

/**
 * ArquivoLote controller.
 *
 * @Route("/importacaolote")
 */
class ArquivoLoteController extends Controller
{
    /**
     * Lists all ArquivoLote entities.
     *
     * @Route("/", name="importacaolote_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $arquivoLotes = $em->getRepository('AppBundle:ArquivoLote')->findAll();

        return $this->render('arquivolote/index.html.twig', array(
            'arquivoLotes' => $arquivoLotes,
        ));
    }

    /**
     * Creates a new ArquivoLote entity.
     *
     * @Route("/new",  name="importacaolote_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $arquivoLote = new ArquivoLote();
        $form = $this->createForm('AppBundle\Form\ArquivoLoteType', $arquivoLote);
        $form->handleRequest($request);
        
        $itensLote = new ItensLote();
        
        if ($form->isSubmitted() && $form->isValid()) {
        	
        	//So pode persistir os dados do arquivo se os itens foram devidamente salvos
			$itensLoteRepository = new ItensLoteRepository($this->getDoctrine()->getManager());
			//Salvo os itens no repository
			$itensLoteRepository->getItensToLoadFromFile($arquivoLote->getArquivoImportado(), $arquivoLote->getCeLote());
			
			$em = $this->getDoctrine()->getManager();            
            $em->persist($arquivoLote);
            $em->flush();

            return $this->redirectToRoute('importacaolote_show', array('id' => $arquivoLote->getIdArquivoLote()));
        }

        return $this->render('arquivolote/new.html.twig', array(
            'arquivoLote' => $arquivoLote,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArquivoLote entity.
     *
     * @Route("/{id}", name="importacaolote_show")
     * @Method("GET")
     */
    public function showAction(ArquivoLote $arquivoLote)
    {
        $deleteForm = $this->createDeleteForm($arquivoLote);

        return $this->render('arquivolote/show.html.twig', array(
            'arquivoLote' => $arquivoLote,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ArquivoLote entity.
     *
     * @Route("/{id}/edit", name="importacaolote_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArquivoLote $arquivoLote)
    {
        $deleteForm = $this->createDeleteForm($arquivoLote);
        $editForm = $this->createForm('AppBundle\Form\ArquivoLoteTypeEdit', $arquivoLote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($arquivoLote);
            $em->flush();

            return $this->redirectToRoute('importacaolote_edit', array('id' => $arquivoLote->getIdArquivoLote()));
        }

        return $this->render('arquivolote/edit.html.twig', array(
            'arquivoLote' => $arquivoLote,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArquivoLote entity.
     *
     * @Route("/{id}", name="importacaolote_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArquivoLote $arquivoLote)
    {
        $form = $this->createDeleteForm($arquivoLote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($arquivoLote);
            $em->flush();
        }

        return $this->redirectToRoute('importacaolote_index');
    }

    /**
     * Creates a form to delete a ArquivoLote entity.
     *
     * @param ArquivoLote $arquivoLote The ArquivoLote entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArquivoLote $arquivoLote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('importacaolote_delete', array('id' => $arquivoLote->getIdArquivoLote())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
