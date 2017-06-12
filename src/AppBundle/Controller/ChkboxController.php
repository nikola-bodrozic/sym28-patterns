<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Chkbox;
use AppBundle\Form\ChkboxType;

/**
 * Chkbox controller.
 *
 * @Route("/chkbox")
 */
class ChkboxController extends Controller
{
    /**
     * Lists all Chkbox entities.
     *
     * @Route("/", name="chkbox_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chkboxes = $em->getRepository('AppBundle:Chkbox')->findAll();

        return $this->render('chkbox/index.html.twig', array(
            'chkboxes' => $chkboxes,
        ));
    }

    /**
     * Creates a new Chkbox entity.
     *
     * @Route("/new", name="chkbox_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chkbox = new Chkbox();
        $form = $this->createForm('AppBundle\Form\ChkboxType', $chkbox);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chkbox);
            $em->flush();

            return $this->redirectToRoute('chkbox_show', array('id' => $chkbox->getId()));
        }

        return $this->render('chkbox/new.html.twig', array(
            'chkbox' => $chkbox,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Chkbox entity.
     *
     * @Route("/{id}", name="chkbox_show")
     * @Method("GET")
     */
    public function showAction(Chkbox $chkbox)
    {
        $deleteForm = $this->createDeleteForm($chkbox);

        return $this->render('chkbox/show.html.twig', array(
            'chkbox' => $chkbox,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chkbox entity.
     *
     * @Route("/{id}/edit", name="chkbox_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chkbox $chkbox)
    {
        $deleteForm = $this->createDeleteForm($chkbox);
        $editForm = $this->createForm('AppBundle\Form\ChkboxType', $chkbox);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chkbox);
            $em->flush();

            return $this->redirectToRoute('chkbox_edit', array('id' => $chkbox->getId()));
        }

        return $this->render('chkbox/edit.html.twig', array(
            'chkbox' => $chkbox,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Chkbox entity.
     *
     * @Route("/{id}", name="chkbox_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chkbox $chkbox)
    {
        $form = $this->createDeleteForm($chkbox);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chkbox);
            $em->flush();
        }

        return $this->redirectToRoute('chkbox_index');
    }

    /**
     * Creates a form to delete a Chkbox entity.
     *
     * @param Chkbox $chkbox The Chkbox entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chkbox $chkbox)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chkbox_delete', array('id' => $chkbox->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
