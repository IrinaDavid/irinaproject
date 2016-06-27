<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IrinaController extends Controller
{
    /**
     * @Route("/", name="irina_project")
     */
    public function projectAction(Request $request)
    {
        $todos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findAll();
        return $this->render('irina/index.html.twig', array(
            'todos'=> $todos
            ));
    }

    /**
     * @Route("/irina/about", name="irina_about")
     */
    public function aboutAction()
    {
        return $this->render('irina/about.html.twig');
    }

    /**
     * @Route("/irina/create", name="irina_create")
     */
    public function createAction(Request $request)
    {
        $todo = new Todo;
        $form = $this->createFormBuilder($todo)
        ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High'),'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
        ->add('save', SubmitType::class, array('label'=> 'Create Todo', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
        ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // Get Data
            $name = $form['name']->getData();
            $category = $form['category']->getData();
            $description = $form['description']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');

            $todo->setName($name);
            $todo->setCategory($category);
            $todo->setDescription($description);
            $todo->setPriority($priority);
            $todo->setDueDate($due_date);
            $todo->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($todo);
            $em->flush();

            $this->addFlash(
                'notice',
                'Todo Added'
                );

            return $this->redirectToRoute('irina_create');

        }
        return $this->render('irina/create.html.twig', array('form' => $form->createView()));
    }
    /**
     * @Route("/irina/edit/{id}", name="irina_edit")
     */
    public function editAction($id, Request $request)
    {
        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);

            $now = new\DateTime('now');


            $todo->setName($todo->getName());
            $todo->setCategory($todo->getCategory());
            $todo->setDescription($todo->getDescription());
            $todo->setPriority($todo->getPriority());
            $todo->setDueDate($todo->getDueDate());
            $todo->setCreateDate($now);

        $form = $this->createFormBuilder($todo)
        ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High'),'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
        ->add('save', SubmitType::class, array('label'=> 'Update Todo', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
        ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // Get Data
            $name = $form['name']->getData();
            $category = $form['category']->getData();
            $description = $form['description']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');

            $em = $this->getDoctrine()->getManager();
            $todo = $em->getRepository('AppBundle:Todo')->find($id);

            $todo->setName($name);
            $todo->setCategory($category);
            $todo->setDescription($description);
            $todo->setPriority($priority);
            $todo->setDueDate($due_date);
            $todo->setCreateDate($now);

            $em->flush();

            $this->addFlash(
                'notice',
                'Todo Updated'
                );

            return $this->redirectToRoute('irina_create');

        } 

        return $this->render('irina/edit.html.twig', array(
            'todo'=> $todo,
            'form'=> $form->createView()
            ));
    }
    /**
     * @Route("/irina/details/{id}", name="irina_details")
     */
    public function detailsAction($id)
    {
        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);
        return $this->render('irina/details.html.twig', array(
            'todo'=> $todo
            ));
    }

    /**
     * @Route("/irina/delete/{id}", name="irina_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $todo = $em->getRepository('AppBundle:Todo')->find($id);

        $em->remove($todo);
        $em->flush();

        $this->addFlash(
                'notice',
                'Todo Removed'
                );

        return $this->redirectToRoute('irina_project');
    }
}
