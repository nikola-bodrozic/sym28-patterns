<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Zgrada;
use AppBundle\Form\ZgradaType;

/**
 * Zgrada controller.
 *
 * @Route("/zgrada")
 */
class ZgradaController extends Controller
{
    /**
     * Lists all Zgrada entities.
     *
     * @Route("/", name="zgrada_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $zgradas = $em->getRepository('AppBundle:Zgrada')->findAll();

        return $this->render('zgrada/index.html.twig', array(
            'zgradas' => $zgradas,
        ));
    }

    /**
     * Creates a new Zgrada entity.
     *
     * @Route("/new", name="zgrada_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $zgrada = new Zgrada();
        $form = $this->createForm('AppBundle\Form\ZgradaType', $zgrada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($zgrada);
            $em->flush();

            return $this->redirectToRoute('zgrada_show', array('id' => $zgrada->getId()));
        }

        return $this->render('zgrada/new.html.twig', array(
            'zgrada' => $zgrada,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Zgrada entity.
     *
     * @Route("/{id}", name="zgrada_show")
     * @Method("GET")
     */
    public function showAction(Zgrada $zgrada)
    {
        $deleteForm = $this->createDeleteForm($zgrada);

        return $this->render('zgrada/show.html.twig', array(
            'zgrada' => $zgrada,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Zgrada entity.
     *
     * @Route("/{id}/edit", name="zgrada_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Zgrada $zgrada)
    {
        $deleteForm = $this->createDeleteForm($zgrada);
        $editForm = $this->createForm('AppBundle\Form\ZgradaType', $zgrada);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($zgrada);
            $em->flush();

            return $this->redirectToRoute('zgrada_edit', array('id' => $zgrada->getId()));
        }

        return $this->render('zgrada/edit.html.twig', array(
            'zgrada' => $zgrada,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Zgrada entity.
     *
     * @Route("/{id}", name="zgrada_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Zgrada $zgrada)
    {
        $form = $this->createDeleteForm($zgrada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($zgrada);
            $em->flush();
        }

        return $this->redirectToRoute('zgrada_index');
    }

    /**
     * Creates a form to delete a Zgrada entity.
     *
     * @param Zgrada $zgrada The Zgrada entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Zgrada $zgrada)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('zgrada_delete', array('id' => $zgrada->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
