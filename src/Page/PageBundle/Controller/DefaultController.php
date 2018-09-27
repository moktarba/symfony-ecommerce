<?php

namespace Page\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/pages")
     */
    public function menuAction()
    {
    	$repository = $this->getDoctrine()->getManager()->getRepository('PagePageBundle:Page');
    	$pages = $repository->findAll();
        return $this->render('PagePageBundle:Pages:modules/pagesUsed/menu.html.twig',  array('pages' => $pages));
    }


    /**
    * @Route("/page/{id}",name = "page")
    */
    public function pageAction($id){
    	$em = $this->getDoctrine()->getManager();
    	$page = $em->getRepository('PagePageBundle:Page')->find($id);
    	return $this->render('PagePageBundle:Pages:layout/page.html.twig', array('page'=>$page));
    }

    public function faqAllAction()
    {
      $em = $this->getDoctrine()->getManager();
      $faqs = $em->getRepository('PagePageBundle:Page')->getAllFaqs();
      return $this->render('PagePageBundle:Pages:modules/pagesUsed/aide.html.twig', array('faqs'=>$faqs));
    }

    /**
    * @Route("/faq/{id}",name = "faq")
    */
    public function faqAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$faq = $em->getRepository('PagePageBundle:Page')->getFaq($id);
    	return $this->render('PagePageBundle:Pages:layout/faq.html.twig', array('faq'=>$faq));
    }
}
