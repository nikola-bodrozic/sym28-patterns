<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Soba;
use AppBundle\Form\SobaType;

/**
 * Soba controller.
 *
 * @Route("/soba")
 */
class SobaController extends Controller
{
    /**
     * Lists all Soba entities.
     *
     * @Route("/", name="soba_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sobas = $em->getRepository('AppBundle:Soba')->findAll();

        return $this->render('soba/index.html.twig', array(
            'sobas' => $sobas,
        ));
    }

    /**
     * Creates a new Soba entity.
     *
     * @Route("/new", name="soba_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $soba = new Soba();
        $form = $this->createForm('AppBundle\Form\SobaType', $soba);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($soba);
            $em->flush();

            return $this->redirectToRoute('soba_show', array('id' => $soba->getId()));
        }

        return $this->render('soba/new.html.twig', array(
            'soba' => $soba,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Soba entity.
     *
     * @Route("/{id}", name="soba_show")
     * @Method("GET")
     */
    public function showAction(Soba $soba)
    {
        $deleteForm = $this->createDeleteForm($soba);

        return $this->render('soba/show.html.twig', array(
            'soba' => $soba,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Soba entity.
     *
     * @Route("/{id}/edit", name="soba_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Soba $soba)
    {
        $deleteForm = $this->createDeleteForm($soba);
        $editForm = $this->createForm('AppBundle\Form\SobaType', $soba);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($soba);
            $em->flush();

            return $this->redirectToRoute('soba_edit', array('id' => $soba->getId()));
        }

        return $this->render('soba/edit.html.twig', array(
            'soba' => $soba,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Soba entity.
     *
     * @Route("/{id}", name="soba_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Soba $soba)
    {
        $form = $this->createDeleteForm($soba);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($soba);
            $em->flush();
        }

        return $this->redirectToRoute('soba_index');
    }

    /**
     * Creates a form to delete a Soba entity.
     *
     * @param Soba $soba The Soba entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Soba $soba)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soba_delete', array('id' => $soba->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
