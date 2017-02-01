<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MainController extends Controller
{
    /**
     * @Route ("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Default:home.html.twig');
    }

    /**
     * @Route ("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('MainBundle:Default:about.html.twig');
        //return $this->redirect('https://drive.google.com/file/d/0BxDUZQdoJxYzOHNfTi15b2daRlU/view?usp=sharing');
    }
    /**
     * @Route ("/projects", name="projects")
     */
    public function projectsAction()
    {
        $projects = $this->getDoctrine()
            ->getRepository('Media')
            ->findAll();

        return $this->render('MainBundle:Default:projects.html.twig', [
            'projects'=>$projects
        ]);
    }
    public function listAction()
    {
        $todos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findAll();
        // replace this example code with whatever you need
        return $this->render('MainBundle:Default:home.html.twig', [
            'todos'=>$todos
        ]);
    }
    /**
     * @Route ("/create", name="create")
     */
    public function createAction(Request $request)
    {
        $media= new Media();
        $form = $this->createForm(MediaType::class, $media);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

           return "5+";
        }

        return $this->render('MainBundle:Default:create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
