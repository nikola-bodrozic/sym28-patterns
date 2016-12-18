<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @Route("/show", name="form_show")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tasks = $em
        ->getRepository('AppBundle:Task')
        ->findAll();
        return $this->render(
            'AppBundle:Task:show.html.twig', 
            ['tasks' => $tasks,]
        );
    }

    /**
     * @Route("/add", name="form_add")
     */
    public function addAction(Request $request)
    {
      $task = new Task();
      $form = $this->createForm('AppBundle\Form\TaskType', $task);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($task);
          $em->flush($task);
          // var_dump($form->get('dueDate')->getData());
          // var_dump($form->get('dueDate')->get('date')->get('year')->getData());
          // die;
          return $this->redirectToRoute('form_show');
      }
        return $this->render('AppBundle:Task:add.html.twig', 
            [ 
              'task' => $task,
              'form' => $form->createView(),
            ]
        );
    }

}
