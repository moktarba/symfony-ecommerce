<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UtilisateurController extends Controller
{

    public function MenuLoginAction()
    {
        return $this->render('EcommerceEcommerceBundle:Utilisateur:modulesUsed/loginlink.html.twig', array(
        ));
    }


    public function MenuLogoutAction()
    {
        return $this->render('EcommerceEcommerceBundle:Utilisateur:modulesUsed/logoutlink.html.twig', array(
        ));
    }   

    /**
     * @Route("", name ="")
     */
    public function LoginAction()
    {
        return $this->render('EcommerceEcommerceBundle:Utilisateur:Layout/login.html.twig', array(
        ));
    }   

    /**
     * @Route("/logout", name="logout")
     */
    public function LogoutAction()
    {
        return $this->render('EcommerceEcommerceBundle:Utilisateur:Layout/logout.html.twig', array(
        ));
    }

}
