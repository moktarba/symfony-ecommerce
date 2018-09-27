<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{
    /**
     * 
     */
    public function menuAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$categories = $em->getRepository("EcommerceEcommerceBundle:Category")->findAll();
        return $this->render('EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig', array(
            'categories'=>$categories
        ));
    }

}
